<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\DataObject\User;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\Exception\ExceptionFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Infrastructure\DataObject\DataObjectTrait;


class User implements UserInterface
{
    use DataObjectTrait;

    public function __construct
    ( 
        ExceptionFactoryInterface $exception_factory, 
        string $guid, 
        HistoryInterface $history, 
        ?PersonInterface $person, 
        ?ApplicationInterface $application 
    )
    {
        $this->setExceptionFactory( $exception_factory );
        $this->setGUID( $guid );
        $this->setHistory( $history );          
        $this->person = $person;
        $this->application = $application;
    }
    
    
    public function getApplicationName(): string
    {
        if( isset( $this->application ) )
        {
            return $this->application->getName();
        }
        
        return "";
    } 
    
    
    public function getApplicationGUID(): string
    {
        if( isset( $this->application ) )
        {
            return $this->application->getGUID();
        }
        
        return "";
    }     

    public function getFirstName(): string
    {
        if( isset( $this->person ) )
        {
            return $this->person->getFirstName();
        }
        
        return "";
    }
    
    public function getLastName(): string
    {
        if( isset( $this->person ) )
        {
            return $this->person->getLastName();
        }
        
        return "";
    }    
    
    public function getMiddleName(): string
    {
        if( isset( $this->person ) )
        {
            return $this->person->getMiddleName();
        }
        
        return "";
    }
    
    public function getNickname(): string
    {
        if( isset( $this->person ) )
        {
            return $this->person->getNickname();
        }
        
        return "";
    }    
    
    public function getPersonGUID(): string
    {
        if( isset( $this->person ) )
        {
            return $this->person->getGUID();
        }
        
        return "";
    }    

    public function getSuffix(): string
    {
        if( isset( $this->person ) )
        {
            return $this->person->getSuffix();
        }
        
        return "";
    } 
}