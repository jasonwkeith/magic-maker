<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\Person;

use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Infrastructure\DataObject\DataObjectTrait;

class Person implements PersonInterface
{
    use DataObjectTrait;

    public function __construct( ExceptionFactoryInterface $exception_factory, string $guid, HistoryInterface $history, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd )
    {
        $this->setExceptionFactory( $exception_factory );
        $this->setGUID( $guid );
        $this->setHistory( $history );        
        $this->setFirstName( $first_name );
        $this->setLastName( $last_name );
        $this->setMiddleName( $middle_name );
        $this->setNickname( $nickname );
        $this->setMD( $has_md );
        $this->setPHD( $has_phd );
        $this->setSuffix( $suffix );
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }
    
    public function getLastName(): string
    {
        return $this->last_name;
    }    
    
    public function getMiddleName(): string
    {
        return $this->middle_name;
    }
    
    public function getNickname(): string
    {
        return $this->nickname;
    }    
    
    public function getSuffix(): string
    {
        return $this->suffix;
    } 
    
    public function hasMD(): bool
    {
        return $this->has_md;
    }    
    
    public function hasPHD(): bool
    {
        return $this->has_phd;
    }     

    private function setFirstName( string $value ): void
    {
        $this->first_name = $value;
    }
    
    private function setLastName( string $value ): void
    {
        $this->last_name = $value;
    }    
    
    private function setMiddleName( string $value ): void
    {
        $this->middle_name = $value;        
    }
    
    private function setNickname( string $value ): void
    {
        $this->nickname = $value;        
    }

    private function setMD( bool $value ): void
    {
        $this->has_md = $value;
    }    
    
    private function setPHD( bool $value ): void
    {
        $this->has_phd = $value;
    }       
    
    private function setSuffix( string $value ): void
    {
        $this->suffix = $value;
    }    
}