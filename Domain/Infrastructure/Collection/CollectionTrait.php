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
        $this->_collection_trait_collection = $values;
    }
    
  public function toArray() : array 
  {
        return $this->_collection_trait_collection;
  }    
}