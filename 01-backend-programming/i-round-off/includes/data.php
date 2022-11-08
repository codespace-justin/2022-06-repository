<?php

include_once __DIR__ . "/../model/Property.php";
include_once __DIR__ . "/../model/ResidentialProperty.php";

$_SESSION['properties'] = [];

$dummyData = [
    [
        "offering" => "sale",
        "numRooms" => 4,
        "address"=>"3 wood street",  
        "rent"=>"4000"
    ],
    [
        "address"=>"7 wood street",  
        "rent"=>"4500"
    ],
    [
        "address"=>"3 stone crescent", 
        "rent"=>"10000"
    ],
    [
        "offering" => "rent",
        "numRooms" => 1,
        "address"=>"88 plein street",  
        "rent"=>"3000"
    ],
    [
        "offering" => "rent",
        "numRooms" => 1,
        "address"=>"45 bay heights",  
        "rent"=>"3200"
    ],
    [
        "address"=>"4 panthus street", 
        "rent"=>"8000"
    ]
];

foreach ($dummyData as $arrayObj) {

    if ( count($arrayObj) == 4) {
        $newProperty = new ResidentialProperty($arrayObj['offering'], $arrayObj['numRooms'], $arrayObj['address'], $arrayObj['rent'] );
    } else {
        $newProperty = new Property($arrayObj['address'], $arrayObj['rent'] );
    }

    // var_dump($newProperty);
    // echo "<br>";
    array_push($_SESSION['properties'] , $newProperty);
}
