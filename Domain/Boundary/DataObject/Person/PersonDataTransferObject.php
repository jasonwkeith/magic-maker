<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\DataObject\Person;

class PersonDataTransferObject
{
    public $guid ="";
    public $history = null;    
    public $has_md = false;
    public $has_phd = false;   
    public $first_name ="";
    public $last_name ="";
    public $middle_name ="";
    public $nickname = "";
    public $suffix = "";
}

