<?php

class Property {

    // ========================= fields =========================

    private $address;
    private $price;
    private $thumbnail;

    // ========================= Constructor =========================

    public function __construct($addressInput, $priceInput, $thumbnail) {
        
        $this->address = $addressInput;
        $this->price = $priceInput;
        $this->thumbnail = $thumbnail;
    }

    // ========================= Methods =========================

    public function __toString() {
        return $this->address . " - " . $this->price;
    }

    public function calcInterest($price) {
        return $this->price = $this->price + ($this->price * 0.02);
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


    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }
}