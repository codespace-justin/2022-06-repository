<?php

include_once __DIR__ . "/Property.php";


class ResidentialProperty extends Property {

    // ========================= fields =========================

    private $offering;
    private $numRooms;

    // ========================= constructor =========================

    public function __construct($addressInput, $priceInput, $offeringInput, $numRoomsInput) {

        parent::__construct($addressInput, $priceInput);

        $this->offering = $offeringInput;
        $this->numRooms = $numRoomsInput;
    }
    // ========================= mthoeds =========================

    public function __toString() {
        
        return parent::__toString() . " - " . $this->offering . " - " . $this->numRooms;
    }

    // ========================= get and set =========================

    public function getOffering()
    {
        return $this->offering;
    }
    
    public function setOffering($offering)
    {
        $this->offering = $offering;

        return $this;
    }

    public function getNumRooms()
    {
        return $this->numRooms;
    }

    public function setNumRooms($numRooms)
    {
        $this->numRooms = $numRooms;

        return $this;
    }
}

