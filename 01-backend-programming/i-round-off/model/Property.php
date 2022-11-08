<?php

class Property {

    // ========================= fields =========================

    private $address;
    private $price;

    // ========================= Constructor =========================

    public function __construct($addressInput, $priceInput) {
        
        $this->address = $addressInput;
        $this->price = $priceInput;
    }

    // ========================= Methods =========================

    public function __toString() {
        return $this->address . " - " . $this->price;
    }

    public function calcInterest($price) {
        return $this->price = $this->price + ($this->price * 0.02);
    }

    public static function compareTo($Property1, $Property2) {

        if ( $Property1->price > $Property2->price ) {

            return $Property1;

        } elseif ($Property2->price > $Property1->price) {

            return $Property2;

        } else {

            return "same price";
        }
    }

    // ========================= get set =========================

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}