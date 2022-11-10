<?php

class DbConfig {

    private $user = 'root';
    private $password = 'root';
    private $db = 'inventory';
    private $host = 'localhost';
    private $port = 3308;

    

    public function connectToDatabase() {

        $mysqli = new mysqli(
            $this->user,
            $this->password,
            $this->db,
            $this->host,
            $this->port
        );

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);

        } else {
            //echo "connected successfully";
            return $mysqli;
        }
    }

}