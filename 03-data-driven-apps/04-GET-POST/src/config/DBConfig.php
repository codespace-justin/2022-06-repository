<?php

function connect() {
    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbName = "autocar_trader";
    $port = 3308; // port number only needs to be used if custom port is used on MAMP

    $conn = new mysqli($host, $username, $password, $dbName, $port);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //die function to close connection in case of error
    } else {
        return $conn;
    }
}

