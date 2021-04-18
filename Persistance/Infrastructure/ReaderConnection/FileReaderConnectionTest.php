<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\ReaderConnection;

use PHPUnit\Framework\TestCase;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactory;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionInterface;
use JasonWKeith\Persistance\Infrastructure\API\APIFactory as InfrastructureAPIFactory;
use JasonWKeith\Persistance\Infrastructure\TestConstants;


class FileReaderConnectionTest extends TestCase
{
    public function testReaderReadsCorrectString():void
    {
        $contents = $this->system_under_test->read();
        $this->assertEquals( $this->test_data, $contents );
    }
    
    public function testInvalidFilePathThrowsException():void
    {
        $invalid_path = "/jasonwkeith/Storage/Invalid/Path";
        $connection_parameters = $this->infrastructure_api->createFileConnectionParameters( $invalid_path, $this->file_handle, $this->file_extension );
        $this->expectException( ExceptionInterface::class );
        $this->infrastructure_api->createReaderConnection( $connection_parameters );
    }
    
    public function testInvalidFileHandleThrowsException():void
    {
        $invalid_handle = "garbage_handle_value_does_not_exist";
        $connection_parameters = $this->infrastructure_api->createFileConnectionParameters( $this->path, $invalid_handle, $this->file_extension );
        $this->expectException( ExceptionInterface::class );
        $this->infrastructure_api->createReaderConnection( $connection_parameters );
    }    
    
    public function testInvalidExtensionThrowsException():void
    {
        $invalid_extension = "garbage_extension_value_does_not_exist";
        $connection_parameters = $this->infrastructure_api->createFileConnectionParameters( $this->path, $this->file_handle, $invalid_extension );
        $this->expectException( ExceptionInterface::class );
        $this->infrastructure_api->createReaderConnection( $connection_parameters );
    }       
    
    protected function setUp(): void
    {
        $this->file_handle = "reader_connection_test";
        $this->file_extension = "dev_data";
        
        $this->exception_factory = new ExceptionFactory;
        $this->infrastructure_api_factory = new InfrastructureAPIFactory;
        $this->infrastructure_api = $this->infrastructure_api_factory->create( TestConstants::STORAGE_PATH, $this->exception_factory );    

        $this->path = $this->infrastructure_api->getStoragePath();
        $this->file_path = $this->path . $this->file_handle . "." . $this->file_extension;
        $this->test_data = file_get_contents( $this->file_path );

        $this->connection_parameters = $this->infrastructure_api->createFileConnectionParameters( $this->path, $this->file_handle, $this->file_extension );
        
        $this->system_under_test = $this->infrastructure_api->createReaderConnection( $this->connection_parameters );
    }
}
