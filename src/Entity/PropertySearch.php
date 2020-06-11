<?php 

namespace App\Entity;

class PropertySearch
{
     /**
      * @var int|null
      */
     private $maxPrice;
     
     /**
      * @var int|null
      */
     private $minSurface;

     /**
      * @return int|null
      */
     public function getMaxPrice(): ?int
     {
          return $this->maxPrice;
     }

     /**
      * @param int $price
      * @return PropertySearch
      */
     public function setMaxPrice(int $price): self
     {
          $this->maxPrice = $price;

          return $this;
     }

      /**
      * @return int|null
      */
      public function getMinSurface(): ?int
      {
           return $this->minSurface;
      }
 
      /**
       * @param int $surface
       * @return PropertySearch
       */
      public function setMinSurface(int $surface): self
      {
           $this->minSurface = $surface;
 
           return $this;
      }
}