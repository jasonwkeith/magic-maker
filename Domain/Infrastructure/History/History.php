<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\History;

use JasonWKeith\Domain\Boundary\Infrastructure\DateTime\DateTimeInterface;
use JasonWKeith\Domain\Boundary\Infrastructure\History\HistoryInterface;

class History implements HistoryInterface
{
    private $created;
    private $created_by;
    private $updated;
    private $updated_by;

    public function __construct( DateTimeInterface $created_date, string $created_by, ?DateTimeInterface $updated_date, ?string $updated_by )
    {
        $this->setCreatedBy( $created_by );
        $this->setCreatedDate( $created_date );
        $this->setUpdatedBy( $updated_by );        
        $this->setUpdatedDate( $updated_date );        
    }
    
    public function getCreatedDate(): DateTimeInterface
    {
        return $this->created;
    }
    
    public function getCreatedBy(): string
    {
        return $this->created_by;
    }    
    
    public function getUpdatedDate(): ?DateTimeInterface
    {
        return $this->updated;
    }
    
    public function getUpdatedBy(): ?string
    {
        return $this->updated_by;
    } 
    
    public function setCreatedDate( DateTimeInterface $created_date ): void
    {
        $this->created = $created_date;
    }
    
    public function setCreatedBy( string $created_by ): void
    {
        $this->created_by = $created_by;
    }    
    
    public function setUpdatedDate( ?DateTimeInterface $updated_date ): void
    {
        $this->updated = $updated_date;
    }
    
    public function setUpdatedBy( ?string $updated_by ): void
    {
        $this->updated_by = $updated_by;
    }     
}