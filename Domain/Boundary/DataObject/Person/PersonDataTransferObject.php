<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

class PersonDataTransferObject
{
    public $guid ="";
    public $has_md = false;
    public $has_phd = false;   
    public $first_name ="";
    public $last_name ="";
    public $middle_name ="";
    public $nickname = "";
    public $suffix = "";
    
    static public function duplicate( PersonDataTransferObject $original ): PersonDataTransferObject
    {
        $duplicate = new PersonDataTransferObject;
        $duplicate->guid = $original->guid;
        $duplicate->has_md = $original->has_md;
        $duplicate->has_phd = $original->has_phd;
        $duplicate->first_name = $original->first_name;
        $duplicate->last_name = $original->last_name; 
        $duplicate->middle_name = $original->middle_name; 
        $duplicate->nickname = $original->nickname; 
        $duplicate->suffix = $original->suffix;
        
        return $duplicate;
    }
}

