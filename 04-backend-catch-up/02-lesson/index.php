<?php

    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/model/Car.php";
    require_once __DIR__ . "/include/data.inc.php";
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
                foreach ($carData as $no => $car) {
                    echo "
                        <div class='item'>
                            <h3>
                                Car No: $no
                            </h3>
                            <img src='" . $car->getImage() . "' alt='thumb' width=350 height=200>
                            <ul>
                                <li>". $car->getModel() . "</li>
                                <li>". $car->getManufacturer() . "</li>
                                <li>R". $car->calcFullPrice() . "</li>
                                <li>R". $car->getPrice() . " per month</li>
                            </ul>
                            <form action='./view/viewCar.php' method='get'>
                                <input type='hidden' name='carModel' value='" . $car->getModel() . "'>
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