<?php

class DbConfig {

    private $user = 'root';
    private $password = 'root';
    private $db = 'property_48';
    private $host = 'localhost';
    private $port = 3308;

    public function connectToDatabase() {

        $mysqli = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->db,
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