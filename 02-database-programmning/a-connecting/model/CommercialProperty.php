<?php

include_once __DIR__ . "/Property.php";
include_once __DIR__ . "/../config/DbConfig.php";


class CommercialProperty extends Property {

    // ========================= fields =========================

    private $sizeInMetres;
    private $floors;

    // ========================= constructor =========================

    public function __construct($addressInput, $priceInput, $sizeInMetresInput, $floorsInput) {

        parent::__construct($addressInput, $priceInput);
        
        $this->sizeInMetres = $sizeInMetresInput;
        $this->floors = $floorsInput;
    }
    // ========================= mthoeds =========================

    public function __toString() {
        
        return parent::__toString() . " - " . $this->sizeInMetres . " - " . $this->floors;
    }

    public function totalPrice() {
        return $this->sizeInMetres * $this->getPrice();
    }

    public function createComProperty($commercialProperty) {

        $DbConfig = new DbConfig(); 
        $connection = $DbConfig->connectToDatabase();


        // SQL statement
        $statement = "INSERT INTO property (address, price, size_in_metres, floors)" .
                     "VALUES ('" . $commercialProperty->getAddress() . "', '" . $commercialProperty->getPrice() . "','$commercialProperty->sizeInMetres', '$commercialProperty->floors')";

        // Send request
        if ($result = $connection->query($statement)) {

            return $result; // either true or false
            $connection->close();

        } else {
            // die function is used to kill connection to database and usually used in error handling
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }
    }

    // ========================= get and set =========================



    public function getSizeInMetres()
    {
        return $this->sizeInMetres;
    }
    public function setSizeInMetres($sizeInMetres)
    {
        $this->sizeInMetres = $sizeInMetres;

        return $this;
    }


    public function getFloors()
    {
        return $this->floors;
    }
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }
}

