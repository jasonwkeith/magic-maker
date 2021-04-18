<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\GUID;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Rfc4122\Validator;
use JasonWKeith\Domain\Boundary\Infrastructure\GUID\GUIDInterface;
use JasonWKeith\Domain\Infrastructure\Exception\ExceptionFactoryTrait;

trait GUIDTrait
{
    use ExceptionFactoryTrait;
    
    public function getGUID(): string
    {
        return $this->_guid_trait_guid;
    }
    
    private function isGUIDInvalid(): bool
    {
        $validator = new Validator();
        
        return ! $validator->validate( $this->_guid_trait_guid );
    }
    
    private function setGUID( string $guid ): void
    {
        $this->_guid_trait_guid = $guid;
        if( $this->isGUIDInvalid() )
        {
            throw $this->createException( "Invalid GUID passed into " . get_class( $this ) . " : $guid" );
        }
    }
}