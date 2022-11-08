<?php

// ===================================== Setup ======================================= 

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    session_start();

// ============================== Variables and logic ================================ 

    include_once __DIR__ . "/includes/data.php";
    
    include_once __DIR__ . "/model/ResidentialProperty.php";
    //$_SESSION['dummyData'] = $dummyData;

    $residence1 = new ResidentialProperty("rent", 3, "02 plein street", 9000);
    $residence2 = new Property("10 plein street", 7000);

    echo $residence1;
    echo "<br>";
    echo $residence2;
?>


<!-- ================================= Web Page =================================== -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property48 | Home</title>
    <style>
        .nav {
            display: flex;
            justify-content: space-evenly;
        }
        .section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }
        .box {
            padding: 2rem;
            margin: 1rem;
            box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1 >
        Property 48
    </h1>

    <hr>

    <?php
        foreach ($_SESSION['properties'] as $property) {
            echo "$property <hr>";

           // echo $property->compareTo();
        }

        echo "<br>";

        echo Property::compareTo($_SESSION['properties'][2], $_SESSION['properties'][0]);
    ?>

    <br>

    <div>
        <h2>
            Create Property
        </h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        </form>
    </div>

    <div>
        <h2>
            Create Property
        </h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        </form>
    </div>

</body>
</html>

<!-- 

        Object Orientated Programming

        : Abstraction
        : Encapsulation
        
        : Inheritance
        : Polymorphism

 -->