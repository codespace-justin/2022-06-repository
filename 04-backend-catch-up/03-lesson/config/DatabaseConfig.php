<?php

// ====== Class ======

class DatabaseConfig {
    
    private $host = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbName = "car_sales_tutorial";
    private $port = 3308; // port number only needs to be used if custom port is used on MAMP

    
    public function connect() {

        // create new database connection object
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbName, $this->port);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error); //die function to close connection in case of error
        } else {
            return $conn;
        }
    }
}

// ====== Function ======

// function connect() {

//     $host = "localhost";
//     $username = "root";
//     $password = "root";
//     $dbName = "car_sales_tutorial";
//     $port = 3308; // port number only needs to be used if custom port is used on MAMP


//     $conn = new mysqli($host, $username, $this->password, $this->dbName, $this->port);
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error); //die function to close connection in case of error
//     } else {
//         return $conn;
//     }

// }