<?php

namespace Config;

class DbConfig {

    private $user = 'root';
    private $password = 'root';
    private $db = 'autocar_trader';
    private $host = 'localhost';
    private $port = 3308;

    public function connectToDatabase() {

        // mysqli class is part of the Global namespace so we add a backslash in front of it
        // to ensure we can access it

        $mysqli = new \mysqli(
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