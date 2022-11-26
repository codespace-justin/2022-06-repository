<?php

namespace Models;

class Car extends Item{

    private $brand;
    private $drivetrain;

    public function __construct($brand,$drivetrain){

        $this->brand = $brand;
        $this->drivetrain = $drivetrain; 
    }

    public function __toString()
    {
        return "Brand: " . $this->brand . " - Drivetrain: " . $this->drivetrain;
    }

    public function createCard() {
        return "  
          <ul>
            <li>Manufacturer: $this->brand</li>
            <li> $this->drivetrain</li>
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
     * Get the value of drivetrain
     */ 
    public function getDrivetrain()
    {
        return $this->drivetrain;
    }

    /**
     * Set the value of drivetrain
     *
     * @return  self
     */ 
    public function setDrivetrain($drivetrain)
    {
        $this->drivetrain = $drivetrain;

        return $this;
    }
}