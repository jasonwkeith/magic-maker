<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\WriterConnection;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\APIFactory as DomainAPIFactory;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Persistance\Infrastructure\API\APIFactory as InfrastructureAPIFactory;
use JasonWKeith\Persistance\Infrastructure\TestConstants;

class FileWriterConnectionTest extends TestCase
{
    public function testWriterWritesCorrectString():void
    {
        $this->system_under_test->write( $this->test_data );
        $contents = file_get_contents( $this->file_path );
        $this->assertEquals( $this->test_data, $contents );
    }
    
    public function testInvalidFilePathThrowsException():void
    {
        $invalid_path = "/jasonwkeith/Storage/Invalid/Path";
        $connection_parameters = $this->infrastructure_api->createFileConnectionParameters( $invalid_path, $this->file_handle, $this->file_extension );
        $this->expectException( ExceptionInterface::class );
        $this->infrastructure_api->createWriterConnection( $connection_parameters );
    }    
    
    public function testInvalidResourceThrowsException():void
    {
        $connection_parameters = $this->infrastructure_api->createFileConnectionParameters( $this->path."/Lockers", $this->file_handle, $this->file_extension );
        $this->expectException( ExceptionInterface::class );
        $this->system_under_test = $this->infrastructure_api->createWriterConnection( $connection_parameters );
    }      

    protected function setUp(): void
    {
        $this->file_handle = "writer_connection_test";
        $this->file_extension = "dev_data";
        $this->test_data = $this->createRandomString( 1000 );
        
        $this->domain_api_factory = new DomainAPIFactory;
        $this->domain_api = $this->domain_api_factory->create();        

        $this->exception_factory = new ExceptionFactory;
        $this->infrastructure_api_factory = new InfrastructureAPIFactory;
        $this->infrastructure_api = $this->infrastructure_api_factory->create( TestConstants::STORAGE_PATH, $this->domain_api, $this->exception_factory );
        
        $this->path = $this->infrastructure_api->getStoragePath();
        $this->file_path = $this->path . $this->file_handle . "." . $this->file_extension;

        $this->connection_parameters = $this->infrastructure_api->createFileConnectionParameters( $this->path, $this->file_handle, $this->file_extension );
        
        $this->system_under_test = $this->infrastructure_api->createWriterConnection( $this->connection_parameters );
    }
    
    
    private function createRandomString( int $length ) 
    {
        $characters = ' 0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters_length = strlen( $characters );
        $random_string = '';
        
        for ( $i = 0; $i < $length; $i++ ) 
        {
            $random_string .= $characters[ rand( 0, $characters_length - 1 ) ];
        }
        return $random_string;
    }
}
