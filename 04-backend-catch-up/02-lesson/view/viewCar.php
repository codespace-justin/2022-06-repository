<?php

/**
 * Name: viewCar.php
 * Description: Standard webpage which provides a user with a more detailed view on the Car they selected
 * Author: justin@codespace.co.za
 */

    // error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/../model/Car.php";
    require_once __DIR__ . "/../include/data.inc.php";

    session_start();


// ---------------- Request Handlers ---------------------

    // view car
    if (isset($_GET['viewCar'])) {

        // loop and filter through car data and save selected car to session variable

        foreach ($_SESSION['carData'] as $i => $car) {
        
            if ($car->getModel() == $_GET['carModel']) {
        
                $_SESSION['selectedCar'] = $car;
                break;
            }
        }   
    }

    // purchase car
    if (isset($_POST['purchaseCar'])) {

        // save result of sellCar() method
        $result = $_SESSION['selectedCar']->sellCar();

        if ($result) {

            // redirect to success page if car is sold successfully
            header("Location: ./success.php");

        } else {

            // send an http header that redirects to index.php and sets a GET variable called error with a value of 'soldout'

            // Cookies or a session variable can also be used if this doesn't make sense

            $_SESSION['outOfStock'] = true;

            header("Location: ./../index.php?error=soldout");
        
        }
    }

// ---------------- Request Handlers ---------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $_SESSION['selectedCar']->getManufacturer() . " " . $_SESSION['selectedCar']->getModel(); ?> <!--Print car name in title-->
    </title>
</head>
<body>

    <div class='item'>
        <?php
            echo "
                <img src='" . $_SESSION['selectedCar']->getImage() . "' alt='thumb' width=350 height=200>
                <ul>
                    <li>". $_SESSION['selectedCar']->getModel() . "</li>
                    <li>". $_SESSION['selectedCar']->getManufacturer() . "</li>
                    <li>R". $_SESSION['selectedCar']->calcFullPrice() . "</li>
                    <li>R". $_SESSION['selectedCar']->getPrice() . " per month</li>
                    ". $_SESSION['selectedCar']->displayAvailibility() . "
                </ul>
                <form action='" . $_SERVER['PHP_SELF'] ."' method='post'>
                    <input type='hidden' name='carModel' value='" . $_SESSION['selectedCar']->getModel() . "'>
                    <button type='submit' name='purchaseCar' value='true'>Purchase</button>
                </form>
            ";
        ?>
    </div>
</body>
</html>