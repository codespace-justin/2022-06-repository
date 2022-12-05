<?php

/**
 * Name: CarDAO.php
 * Description: Model class used to model what Car instances/object look like and how they behave.
 * Author: justin@codespace.co.za
 */

class Car {

    // ----------------------- fields --------------------------

    private $model;
    private $manufacturer;
    private $price;
    private $image;
    private $available = true;

    public function __construct($model, $manufacturer, $price, $image) {

        $this->model = $model;
        $this->manufacturer = $manufacturer;
        $this->price = $price;  
        $this->image = $image;
    } 

    // ----------------------- methods --------------------------

    // returns "true" if car is able to be sold and" false" if car is out of stock
    public function sellCar() {

        if ($this->available) {
        
            $this->available = false;
            return true;

        } else {  
            return false;
        }
    }

    // multiplies price property of instance and returns full price of car
    public function calcFullPrice() {
        return $this->price * 72;
    }
    
    // return templates to display whether car is available to purchase or not
    public function displayAvailibility() {

        if ( $this->available ) {
            return "<li style='color:green;'>In stock</li>";
        } else {
            return "<li style='color:red;'>Out of stock</li>";
        }
    }

    // --------------- Getters and Setters -------------------

 
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

    /**
     * Get the value of available
     */ 
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */ 
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }
}