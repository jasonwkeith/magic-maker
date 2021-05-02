<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure;

trait TestHelperTrait
{
    private function getDataObjectAPI()
    {
        return $this->_data_object_api;    
    }  
    
    private function getTestDataAPI()
    {
        return $this->_test_data_api;    
    }
    
    private function getSystemUnderTest()
    {
        return $this->_system_under_test;    
    }  
    
    private function getSystemUnderTestFactory()
    {
        return $this->_system_under_test_factory;    
    }

    private function getTestData()
    {
        return $this->_test_data;
    }     

    private function getTestDataFactory()
    {
        return $this->_test_data_factory;
    } 
    
    private function setDataObjectAPI( $api ): void
    {
        $this->_data_object_api = $api;
    }    
    private function setTestDataAPI( $api ): void
    {
        $this->_test_data_api = $api;
    }       

    private function setSystemUnderTest( $system ): void
    {
        $this->_system_under_test = $system;
    }    
    private function setSystemUnderTestFactory( $factory ): void
    {
        $this->_system_under_test_factory = $factory;
    }     
    
    private function setTestData( $test_data ): void
    {
        $this->_test_data = $test_data;
    }    
    
    private function setTestDataFactory( $factory ): void
    {
        $this->_test_data_factory = $factory;
    }        
}


