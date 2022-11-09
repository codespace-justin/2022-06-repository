<?php

// ===================================== Setup ======================================= 

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    session_start();

// ============================== Variables and logic ================================ 

    include_once __DIR__ . "/includes/data.php";   

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
    <h1>
        Property 48
    </h1>

    <hr>

    <div class="nav">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="sale">For Sale</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="rent">For Rent</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="commerce">Commercial</button>
        </form>
    </div>

    <?php
        if ( isset( $_GET['filterOption'] ) ) {
            
            switch ($_GET['filterOption']) {
                case 'sale':
                    include_once __DIR__ . "/views/saleTab.php";
                    break;

                case 'rent':
                    include_once __DIR__ . "/views/rentTab.php";
                    break;

                case 'commerce':
                    include_once __DIR__ . "/views/commerceTab.php";

                default:
                    # code...
                    break;
            }

        }
    ?>
</body>
</html>

<!-- 

        Object Orientated Programming

        : Abstraction
        : Encapsulation
        
        : Inheritance
        : Polymorphism

 -->