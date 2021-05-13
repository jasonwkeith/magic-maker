<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Boundary\Infrastructure\History;

class HistoryDataTransferObject
{
    public $created_date = null;     
    public $created_by = ""; 
    public $updated_date = null;     
    public $updated_by = "";     
    
    public function duplicate( HistoryDataTransferObject $original ): HistoryDataTransferObject
    {
        $duplicate = new HistoryDataTransferObject;
        $duplicate->created_date = $original->created_date->duplicate();
        $duplicate->created_by = $original->created_by;
        
        $duplicate->updated_date = null;
        if( $original->updated_date )
        {
            $duplicate->updated_date = $original->updated_date->duplicate();
        }
        $duplicate->updated_by = $original->updated_by;
        
        return $duplicate;
    }    
}
