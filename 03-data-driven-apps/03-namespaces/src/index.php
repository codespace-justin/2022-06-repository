<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../vendor/autoload.php";

use Models\Bike;
use Models\Car;
use Models\Item;

// use function Models\calculateCost;

// calculateCost();

$catalogue = [
  new Bike("Suzuki", 250),
  new Bike("Yamaha", 700),
  new Bike("Harley-Davidson", 600),
  new Bike("GoMoto", 125),
  new Car("Honda", "FF"),
  new Car("Land Rover", "4WD"),
  new Car("BMW", "FR")

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue</title>
</head>
<body>

  <h1>
    Autocar Trader:
  </h1>

  <section>
    <?php

      foreach ($catalogue as $i => $item) {

        echo "  
          <div>
            <hr>
            <h2>Item $i</h2>
            " . $item->createCard() . "
            <hr>
          </div>
        ";

      }
    ?>

  </section>

</body>
</html>