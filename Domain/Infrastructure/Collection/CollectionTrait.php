<?php
declare( strict_types = 1 );
namespace JasonWKeith\Domain\Infrastructure\Collection;

trait CollectionTrait
{
    public function getIterator()
    {
        return new \ArrayIterator( $this->_collection_trait_collection );
    }
    
    private function setCollection( $values )
    {
        if( ! isset( $values[ 0 ] ) )
        {
            $values = array();
        }
        
        $this->_collection_trait_collection = $values;
    }
    
  public function toArray() : array 
  {
        return $this->_collection_trait_collection;
  }    
  
  public function getSize(): int
  {
      return count( $this->_collection_trait_collection );
  }
}