<?php
include_once __DIR__ . "/../model/Property.php";
include_once __DIR__ . "/../model/CommercialProperty.php";
include_once __DIR__ . "/../model/ResidentialProperty.php";


$_SESSION['properties'] = [
    new CommercialProperty('3616 Diamond Street',250, 100, 1),
    new ResidentialProperty('3111 Vine Street',2000000, "sale", 4),
    new CommercialProperty('3522 Abner Road',220, 100, 1),
    new CommercialProperty('2263 New York Avenue',350, 50, 1),
    new ResidentialProperty('2578 Briarwood Road',1600000, "sale", 4),
    new ResidentialProperty('1429 Murphy Court',6500, "rent", 1)
];
