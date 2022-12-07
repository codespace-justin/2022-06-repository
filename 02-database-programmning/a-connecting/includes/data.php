<?php

include_once __DIR__ . "/../model/Property.php";
include_once __DIR__ . "/../model/CommercialProperty.php";
include_once __DIR__ . "/../model/ResidentialProperty.php";


$_SESSION['properties'] = [
    new CommercialProperty(
        '3616 Diamond Street',
        250, 
        "https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80", 
        100, 
        1
    ),
    new ResidentialProperty(
        '3111 Vine Street',
        2000000, 
        "02.jpg", 
        "sale",
        4
    ),
    new CommercialProperty('3522 Abner Road',220, "02.jpg", 100, 1),
    new CommercialProperty('2263 New York Avenue',350,"02.jpg", 50, 2),
    new ResidentialProperty('2578 Briarwood Road',1600000,"02.jpg", "sale", 3),
    new ResidentialProperty('1429 Murphy Court',6500, "02.jpg", "rent", 1)
];
