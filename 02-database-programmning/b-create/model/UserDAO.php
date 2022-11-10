<?php

require_once __DIR__ . "/User.php";

// Data Access Object
class UserDAO {

    public function createUser($DbConfig, $User) {

        $connection = $DbConfig->connectToDatabase();

        // SQL statement
        $statement = "INSERT INTO user (id, username, password, email, role)" .
                     "VALUES ('".$User->getId()."','".$User->getUsername()."','".$User->getPassword()."','".$User->getEmail()."','".$User->getRole()."')";

        // Send request
        if ($result = $connection->query($statement)) {

            return $result; // either true or false
            $connection->close();

        } else {
            // die function is used to kill connection to database and usually used in error handling
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }
    }

}