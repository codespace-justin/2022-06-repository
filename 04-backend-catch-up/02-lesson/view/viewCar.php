<?php

session_start();

require_once __DIR__ . "/../model/Car.php";
require_once __DIR__ . "/../include/data.inc.php";

$selectedCar;

foreach ($carData as $i => $car) {
    
    if ($car->getModel() == $_GET['carModel'] || !$car->getSold()) {

        $selectedCar = $car;
        $_SESSION['selectedCar'] = $selectedCar;
        break;

    } else {

        echo "selected car does not exist or is out of stock";
    }
}

// ---------------- Request Handler ---------------------

if (isset($_POST['purchaseCar'])) {

    echo $_SESSION['selectedCar']->sellCar();
}


// ---------------- Request Handler ---------------------

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "
        <div class='item'>
            <img src='" . $selectedCar->getImage() . "' alt='thumb' width=350 height=200>
            <ul>
                <li>". $selectedCar->getModel() . "</li>
                <li>". $selectedCar->getManufacturer() . "</li>
                <li>R". $selectedCar->calcFullPrice() . "</li>
                <li>R". $selectedCar->getPrice() . " per month</li>
            </ul>
            <form action='" . $_SERVER['PHP_SELF'] ."' method='post'>
                <input type='hidden' name='carModel' value='" . $selectedCar->getModel() . "'>
                <button type='submit' name='purchaseCar' value='true'>Purchase</button>
            </form>
        </div>
    ";
    ?>
</body>
</html>