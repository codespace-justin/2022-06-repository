<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../vendor/autoload.php";

// app namespaces
use Models\Vehicle;
use DataPersistence\VehicleDAO;
use Config\DbConfig;



//$dbConfig = new DbConfig();
//$vehicleDAO = new VehicleDAO();

// ---------- Setup ------------

