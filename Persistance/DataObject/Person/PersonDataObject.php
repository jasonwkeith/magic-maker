<?php
declare( strict_types = 1 );
namespace JasonWKeith\Persistance\DataObject\Person;

class PersonDataObject implements PersonDataObjectInterface
{
    public function __construct( string $guid, string $first_name, string $middle_name, string $last_name,  string $nickname, string $suffix, bool $has_md, bool $has_phd ) 
    {
        $this->guid = $guid;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->nickname = $nickname;
        $this->suffix = $suffix;
        $this->has_md = $has_md;
        $this->has_phd = $has_phd;
    }
    
    public function getGUID(): string
    {
        return $this->guid;
    }
    
    public function getFirstName():string
    {
        return $this->first_name;
    }

    public function getLastName():string
    {
        return $this->last_name;
    }    
    
    public function getMiddleName():string
    {
        return $this->middle_name;
    }    
    
    public function getNickname():string
    {
        return $this->nickname;
    }    
    
    public function getSuffix():string
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
}