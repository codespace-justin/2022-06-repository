<?php

/**
 * Name: index.php
 * Description: Homepage of website, displaying list of all cars in the system
 * Author: justin@codespace.co.za
 */

    // error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // includes and session
    require_once __DIR__ . "/model/Car.php";
    require_once __DIR__ . "/data/CarDAO.php";
    require_once __DIR__ . "/config/DatabaseConfig.php";

    session_start();
    
    // CarDAO and Database Config objects
    $databaseConfig = new DatabaseConfig();
    $carDAO = new CarDAO($databaseConfig);

    // remove session assignment and load in car data from Database
    $carData = $carDAO->readAll();

    // outOfStock request handler
    if (isset($_SESSION['outOfStock']) && $_SESSION['outOfStock'] == true ) {

        echo "
            <script>
                alert('Oops sorry about this error but it seems the car you wished to purchase is either sold or no longer available..');
            </script>
        ";

        unset($_SESSION['outOfStock']);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Merchant</title>
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
    <hr>
    <h1>
        Auto Merchant
    </h1>
    
    <hr>
    
    <section>
        <h4>Operations</h4>
    </section>

    <hr>

    <section>
        <h4>
            Stock
        </h4>
        <div class="items">
            <?php
                foreach ($carData as $i => $car) {
                    echo "
                        <div class='item'>
                            <h3>
                                Car No: " . ($i + 1). "
                            </h3>
                            <ul>
                                <li>". $car->getModel() . "</li>
                                <li>". $car->getManufacturer() . "</li>
                                <li>R". $car->calcFullPrice() . "</li>
                                ". $car->displayAvailibility() . "
                            </ul>
                            <form action='./view/viewCar.php' method='get'>
                                <input type='hidden' name='carId' value='" . $car->getId() . "'>
                                <button type='submit' name='viewCar' value='true'>View Car</button>
                            </form>
                        </div>
                    ";
                }
            ?>
        </div>
    </section>

</body>
</html>