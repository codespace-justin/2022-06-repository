<?php

require_once __DIR__ . "/User.php";

// Data Access Object
class UserDAO {

    // -------------------------------------- Create --------------------------------------
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

    // -------------------------------------- Read By ID --------------------------------------
    public function readById($DbConfig, $userId) {

        // connect to DB
        $connection = $DbConfig->connectToDatabase();

        // SQL statement
        $statement = "SELECT * FROM user WHERE id='$userId' ";

        if ($result = $connection->query($statement)) {

            // get only 1 single result
            $row = $result->fetch_object(); // returns a PHP stdObject

            // only call parse function if object exists in database, otherwise return nothing
            if ($row !== null) {
            
                $userObject = new User(
                    $row->username,
                    $row->password,
                    $row->email,
                    $row->role
                );
                    
                $userObject->setId($row->id);

                return $userObject;
            }  
                                        
        } else {

            echo $connection->error;
            die("Connection failed: " . $connection->connect_error); //die function to close connection in case of error
        }

        $connection->close();
    }

}