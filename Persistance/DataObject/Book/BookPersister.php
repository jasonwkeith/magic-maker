<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Book;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Persistance\Infrastructure\Exception\ExceptionFactoryTrait;
use JasonWKeith\Persistance\Infrastructure\ConnectionParameters\ConnectionParametersInterface;
use JasonWKeith\Persistance\Infrastructure\FileHandler\FileHandlerTrait;
use JasonWKeith\Persistance\Infrastructure\ReaderConnection\ReaderConnectionInterface;
use JasonWKeith\Persistance\Infrastructure\WriterConnection\WriterConnectionInterface;

class BookPersister implements BookPersisterInterface
{
    use ExceptionFactoryTrait;
    
    public function __construct( ExceptionFactoryInterface $exception_Factory, WriterConnectionInterface $writer, ReaderConnectionInterface $reader, BookDataObjectFactoryInterface $data_object_factory )
    {
        $this->setExceptionFactory( $exception_Factory );
        $this->writer = $writer;
        $this->reader = $reader;
        $this->data_object_factory = $data_object_factory;
    }
    
    public function write( BookDataObjectInterface $data_object ): void
    {
        $standard_objects = $this->loadStandardObjects();
        $standard_objects[ $data_object->getGUID() ] =  $data_object;
        $data = json_encode( $standard_objects, JSON_PRETTY_PRINT );
        $this->loadStandardObjects( $data );
        $this->writer->write( $data );
    }
    
    public function read( string $guid ): BookDataObjectInterface
    {
        $standard_objects = $this->loadStandardObjects();        
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        $standard_object = $standard_objects[ $guid ];

        return $this->data_object_factory->create( $standard_object['guid'], $standard_object['author_guids'], $standard_object['published_year'], $standard_object['subtitle'], $standard_object['title'] );
    }
    
    public function remove( string $guid ): void
    {
        $standard_objects = $this->loadStandardObjects( $this->reader->read() );    
        $this->throwInvalidGUIDException( isset( $standard_objects[ $guid ] ), $guid );
        
        unset( $standard_objects[ $guid ] );
        $this->writer->write( json_encode( $standard_objects ) );    
    }    

    private function loadStandardObjects(): array
    {
        $data = $this->reader->read();
        if( strlen( $data ) === 0 )
        {
            $data = array();
        }  
        else
        {
            $data = json_decode( $data, true );
        
            switch (json_last_error()) 
            {
                case JSON_ERROR_DEPTH:
                    echo ' - Maximum stack depth exceeded';
                break;
                case JSON_ERROR_STATE_MISMATCH:
                    echo ' - Underflow or the modes mismatch';
                break;
                case JSON_ERROR_CTRL_CHAR:
                    echo ' - Unexpected control character found';
                    $data = array();
                break;
                case JSON_ERROR_SYNTAX:
                    //throw $this->createException("bs" );
                    echo ' - Syntax error, malformed JSON';
                break;
                case JSON_ERROR_UTF8:
                    echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                break;
            }
        }

        return $data;
    }
    
    private function throwInvalidGUIDException( bool $exists, string $guid ) :void
    {
        if( ! $exists )
        {
            $message = "Cannot locate saved data for GUID $guid.";
            throw $this->createException( $message );
        }
    }
    
    private function scrubJSONData( string $data ): string
    {
        // This will remove unwanted characters.
        for ($i = 0; $i <= 31; ++$i ) 
        { 
            $data = str_replace( chr( $i ), "", $data ); 
        }
        $data = str_replace( chr( 127 ), "", $data );

        // Some file begins with 'efbbbf' to mark the beginning of the file. (binary level)
        // here we detect it and we remove it, basically it's the first 3 characters 
        if( 0 === strpos( bin2hex( $data ), 'efbbbf' ) ) 
        {
            $data = substr($data, 3);
        }
        return $data;
    }
}