<?php

namespace Models;

class Bike extends Item {

    private $brand;
    private $cc;

    public function __construct($brand,$cc){

        $this->brand = $brand;
        $this->cc = $cc; 
    }

    public function __toString()
    {
        return "Brand: " . $this->brand . " - Displacement: " . $this->cc;
    }

    public function createCard() {
        return "  
          <ul>
            <li>Manufacturer: $this->brand</li>
            <li> $this->cc</li>
          </ul>
      ";
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of cc
     */ 
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set the value of cc
     *
     * @return  self
     */ 
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }
}

function calculateCost() {
    return 100 * 24;
}