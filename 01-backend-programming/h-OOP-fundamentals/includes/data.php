<?php

include_once __DIR__ . "/../model/Property.php";

$_SESSION['properties'] = [];

$dummyData = [
    [
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
        "address"=>"88 plein street",  
        "rent"=>"7000"
    ],
    [
        "address"=>"45 bay heights",  
        "rent"=>"3000"
    ],
    [
        "address"=>"4 panthus street", 
        "rent"=>"8000"
    ]
];

foreach ($dummyData as $arrayObj) {

    $newProperty = new Property($arrayObj['address'], $arrayObj['rent'] );

    // var_dump($newProperty);
    // echo "<br>";
    array_push($_SESSION['properties'] , $newProperty);
}
