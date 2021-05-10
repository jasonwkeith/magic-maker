<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;

trait HistoryTrait
{
    private function createDateTimeArray( DateTimeInterface $date_time ): array
    {
        $date_time_array = array();
        $date_time_array[ 'year' ] = $date_time->getYear();
        $date_time_array[ 'month' ] = $date_time->getMonth();
        $date_time_array[ 'day' ] = $date_time->getDay();        
        $date_time_array[ 'hour' ] = $date_time->getHour();
        $date_time_array[ 'minute' ] = $date_time->getMinute();
        $date_time_array[ 'second' ] = $date_time->getSecond();   
        
        return $date_time_array;
    }

    private function setCreatedDateTime( DateTimeInterface $date_time )
    {
        $this->created_date_time = $this->createDateTimeArray($date_time );
    }
    
    private function setUpdatedDateTime( DateTimeInterface $date_time )
    {
        $this->updated_date_time = $this->createDateTimeArray($date_time );
    }
    
    private function setUpdatedDateTimeToNull()
    {
        $this->updated_date_time = null;
    }    

    public function getCreatedBy(): string
    {
        return $this->created_by;
    }
    
    public function getUpdatedBy(): ?string
    {
        return $this->updated_by;
    }    
    
    public function getCreatedYear(): int
    {
        return $this->created_date_time[ 'year' ];
    }    
    
    public function getCreatedMonth(): int
    {
        return $this->created_date_time[ 'month' ];
    }   
    
    public function getCreatedDay(): int
    {
        return $this->created_date_time[ 'day' ];
    }    
    
    public function getCreatedHour(): int
    {
        return $this->created_date_time[ 'hour' ];
    }     
    
    public function getCreatedMinute(): int
    {
        return $this->created_date_time[ 'minute' ];
    }    
    
    public function getCreatedSecond(): int
    {
        return $this->created_date_time[ 'second' ];
    }      
    
    public function getUpdatedYear(): ?int
    {
        return $this->updated_date_time[ 'year' ];
    }    
    
    public function getUpdatedMonth(): ?int
    {
        return $this->updated_date_time[ 'month' ];
    }   
    
    public function getUpdatedDay(): ?int
    {
        return $this->updated_date_time[ 'day' ];
    }    
    
    public function getUpdatedHour(): ?int
    {
        return $this->updated_date_time[ 'hour' ];
    }     
    
    public function getUpdatedMinute(): ?int
    {
        return $this->updated_date_time[ 'minute' ];
    }    
    
    public function getUpdatedSecond(): ?int
    {
        return $this->updated_date_time[ 'second' ];
    }      
    
    public function hasUpdatedDateTime(): bool
    {
        return isset( $this->updated_date_time );
    }
}