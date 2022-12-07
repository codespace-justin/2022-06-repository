<?php

    // error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/../config/DatabaseConfig.php";
    require_once __DIR__ . "/../data/CarDAO.php";

    // runnable code

    /**
     * in this code we are trying to add new stock to our list of cars
     */

    // create new DBConfig obj
    $databaseConfig = new DatabaseConfig();

    // create new CarDAO object to interface with Car table in DB
    $carDAO = new CarDAO($databaseConfig);

    // $abc = new Car("Swift", "Suzuki", 90000, "null");

    // $carDAO->create($abc);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test DB Connection</title>
</head>
<body>
    
</body>
</html>