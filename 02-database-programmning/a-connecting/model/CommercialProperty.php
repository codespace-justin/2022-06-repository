<?php

include_once __DIR__ . "/Property.php";
include_once __DIR__ . "/../config/DbConfig.php";


class CommercialProperty extends Property {

    // ========================= fields =========================

    private $sizeInMetres;
    private $floors;

    // ========================= constructor =========================

    public function __construct($addressInput, $priceInput, $thumbnail, $sizeInMetresInput, $floorsInput) {

        parent::__construct($addressInput, $priceInput, $thumbnail);
        
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

