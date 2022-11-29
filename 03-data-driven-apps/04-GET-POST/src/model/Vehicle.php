<?php

namespace Models;

class Vehicle {

    private $id;
    private $type;
    private $brand;
    private $displacement;

    public function __construct($type,$brand,$displacement){

        $this->type = $type;
        $this->brand = $brand;
        $this->displacement = $displacement;
    }

    public function createCard() {
        return " 
          <h2> ID : $this->id</h2> 
          <ul>
            <li>Type: $this->type</li>
            <li>Manufacturer: $this->brand</li>
            <li>Displacement: $this->displacement</li>
          </ul>
      ";
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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
     * Get the value of displacement
     */ 
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * Set the value of displacement
     *
     * @return  self
     */ 
    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;

        return $this;
    }
}