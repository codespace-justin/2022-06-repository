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
    require_once __DIR__ . "/../data/CarDAO.php";

    session_start();

    $databaseConfig = new DatabaseConfig();
    $carDAO = new CarDAO($databaseConfig);

// ---------------- Request Handlers ---------------------

    // view car
    if (isset($_GET['viewCar'])) {

        // remove filter and load in a car by id via the CarDAO class
        $_SESSION['selectedCar'] = $carDAO->readById($_GET['carId']);    
        $selectedCar = $_SESSION['selectedCar'];
    }

    // purchase car
    if (isset($_POST['purchaseCar'])) {

        // save result of sellCar() method
        $result = $_SESSION['selectedCar']->sellCar();

        $carDAO->updateSellCar($_SESSION['selectedCar']);

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
        <?php echo $selectedCar->getManufacturer() . " " . $selectedCar->getModel(); ?> <!--Print car name in title-->
    </title>
</head>
<body>

    <div class='item'>
        <?php
            echo "
                <img src='" . $selectedCar->getImage() . "' alt='thumb' width=350 height=200>
                <ul>
                    <li>". $selectedCar->getModel() . "</li>
                    <li>". $selectedCar->getManufacturer() . "</li>
                    <li>R". $selectedCar->calcFullPrice() . "</li>
                    <li>R". $selectedCar->getPrice() . " per month</li>
                    ". $selectedCar->displayAvailibility() . "
                </ul>
                <form action='" . $_SERVER['PHP_SELF'] ."' method='post'>
                    <input type='hidden' name='carModel' value='" . $selectedCar->getModel() . "'>
                    <button type='submit' name='purchaseCar' value='true'>Purchase</button>
                </form>
            ";
        ?>
    </div>
</body>
</html>