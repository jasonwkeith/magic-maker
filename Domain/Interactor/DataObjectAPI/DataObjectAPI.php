<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Interactor\DataObjectAPI;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Book\BookFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Content\ContentFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\Person\PersonFactoryInterface;
use JasonWKeith\Domain\Boundary\DataObject\User\UserFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeFactoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryFactoryInterface;

class DataObjectAPI implements DataObjectAPIInterface
{
    public function __construct
    ( 
        ApplicationFactoryInterface $application_factory,
        BookFactoryInterface $book_factory, 
        ContentFactoryInterface $content_factory,
        DateTimeFactoryInterface $date_time_factory,
        HistoryFactoryInterface $history_factory,        
        PersonFactoryInterface $person_factory,
        UserFactoryInterface $user_factory
    )
    {
        $this->application_factory = $application_factory;
        $this->book_factory = $book_factory;
        $this->content_factory = $content_factory;
        $this->date_time_factory = $date_time_factory;
        $this->history_factory = $history_factory;
        $this->person_factory = $person_factory;
        $this->user_factory = $user_factory;
    }
    
    public function createApplicationFactory(): ApplicationFactoryInterface
    {
        return $this->application_factory;
    }       

    public function createBookFactory(): BookFactoryInterface
    {
        return $this->book_factory;
    }   

    public function createContentFactory(): ContentFactoryInterface
    {
        return $this->content_factory;
    }  
    
    public function createDateTimeFactory(): DateTimeFactoryInterface
    {
        return $this->date_time_factory;
    }     
    
    public function createHistoryFactory(): HistoryFactoryInterface
    {
        return $this->history_factory;
    }  
    
    public function createPersonFactory(): PersonFactoryInterface
    {
        return $this->person_factory;
    }     

    public function createTextFactory(): TextFactoryInterface
    {
        return $this->text_factory;
    }   
    
    public function createUserFactory(): UserFactoryInterface
    {
        return $this->user_factory;
    }      
}