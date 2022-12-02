<?php

class Car {

    private $id;
    private $model;
    private $manufacturer;
    private $price;
    private $image;
    private $available = false;

    public function __construct($model, $manufacturer, $price, $image) {

        $this->model = $model;
        $this->manufacturer = $manufacturer;
        $this->price = $price;  
        $this->image = $image;
    } 

    public function sellCar() {

        if ($this->available == false) {
            
            return "Model is sold out..";
        
        } else {

            $this->available = false;
            return $this-> manufacturer . " " . $this->model . " was sold for: R" . $this->price;
        }
    }

    public function calcFullPrice()
    {
        return $this->price * 72;
    }

    /*

    public static function createCarFromDb($id, $model, $manufacturer, $displacement, $image) {

        $car1 = new Car($model, $manufacturer, $displacement, $image);
        $car1->id = $id;

        return $car1;
    }

    public static function createCar($model, $manufacturer, $displacement, $image) {

        $generatedID = rand(10000, 99999);

        $car1 = new Car($model, $manufacturer, $displacement, $image);
        $car1->id = $generatedID;

        return $car1;
    } 

    */

    // --------------- Getters and Setters -------------------


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

 
    public function getModel()
    {
        return $this->model;
    } 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }


    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }


    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
 
    public function getSold()
    {
        return $this->sold;
    }

    public function setSold($sold)
    {
        $this->sold = $sold;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}