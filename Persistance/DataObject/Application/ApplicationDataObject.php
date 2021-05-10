<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Application;

use JasonWKeith\Domain\Boundary\DataObject\Application\ApplicationInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryInterface;
use JasonWKeith\Persistance\Infrastructure\History\HistoryTrait;

class ApplicationDataObject implements ApplicationDataObjectInterface
{
    use HistoryTrait;
    
    public function __construct
    ( 
        string $guid, 
        string $created_by,
        ?string $updated_by,
        DateTimeInterface $created_date_time, 
        ?DateTimeInterface $updated_date_time, 
        string $name 
    )
    {
        $this->guid = $guid;
        $this->created_by = $created_by;
        $this->updated_by = $updated_by;
        $this->name = $name;
        $this->setCreatedDateTime( $created_date_time );
        
        $this->setUpdatedDateTimeToNull();
        if( $updated_date_time )
        {
            $this->setUpdatedDateTime( $updated_date_time );
        }

    }
    
    public function getGUID(): string
    {
        return $this->guid;
    }
    
    public function getName(): string
    {
        return $this->name;
    }   
}