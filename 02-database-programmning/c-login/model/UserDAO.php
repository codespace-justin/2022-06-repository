<?php

require_once __DIR__ . "/User.php";

// Data Access Object
class UserDAO {

    /* --------------------------------------------  Create  -------------------------------------------------- */

    public function createUser($DbConfig, $User) {

        $connection = $DbConfig->connectToDatabase();

        // SQL statement
        $statement = "INSERT INTO user (id, username, password, email, role)" .
                     "VALUES ('".$User->getId()."','".$User->getUsername()."','".$User->getPassword()."','".$User->getEmail()."','".$User->getRole()."')";

        // Send request
        if ($result = $connection->query($statement)) {

            $connection->close();
            return $result; // either true or false

        } else {
            // die function is used to kill connection to database and usually used in error handling
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }
    }

    
    /* --------------------------------------------  Read By Username -------------------------------------------------- */

    public function readByUsername($DbConfig, $username, $password) {

        // connect to DB
        $connection = $DbConfig->connectToDatabase();

        // SQL statement
        $statement = "SELECT * FROM user WHERE username='$username'";

        if ($result = $connection->query($statement)) {

            // get only 1 single result
            $row = $result->fetch_object(); // returns a PHP stdObject

            // only call parse function if object exists in database and if the password passed as an argument
            // is the same as the password in the database, create a new User object and return it
            if ($row !== null && $password == $row->password) {

                $userObject = new User(
                    $row->username,
                    $row->password,
                    $row->email,
                    $row->role
                );
                    
                $userObject->setId($row->id);

                $connection->close();
                return $userObject;
            }  
                                        
        } else {

            echo $connection->error;
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }

        $connection->close();
    }


    /* --------------------------------------------  Read All  -------------------------------------------------- */

    public function readAll($DbConfig) {

        // connect to DB
        $connection = $DbConfig->connectToDatabase();

        // create temporary variable to store users being returned from database
        $usersFromDb = [];

        // SQL statement : select all rows from table user
        $statement = "SELECT * FROM user";

        if ($result = $connection->query($statement)) {

            // wrap fetch_object function in a while loop
            // this allows use to repeatadly fetch rows from the database untill no more rows exist, since the condition will be false
            while($row = $result->fetch_object()) {

                // create new user object from current row
                $userObject = new User($row->username,$row->password,$row->email,$row->role);

                // set the id of the user object == to the id obtained from the row inside the database
                $userObject->setId($row->id);

                // push newly instantiated User object into $userFromDb array
                array_push($usersFromDb, $userObject);
            } 
            
            // once loop is finished all rows have been pulled we return the array and close connection
            $connection->close();
            return $usersFromDb;           
            
        } else {

            echo $connection->error;
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }

        $connection->close();
    }


    /* --------------------------------------------  Update  -------------------------------------------------- */

    function updateById($DbConfig, $id, $username, $password, $email, $role) {

        // Connect to database and return connection object
        $connection = $DbConfig->connectToDatabase();
    
        // the statement that gets sent to the database
    
        //           "INSERT INTO user (username, password) VALUES('$username', '$password')";
        $statement = "  UPDATE user 
                        SET username='$username', password='$password' , email='$email' , role='$role' 
                        WHERE id='$id'";
    
        // Send request
        if ($result = $connection->query($statement)) {
    
            $connection->close();
            return $result; 
       
        } else {
            // die function is used to kill connection to database and usually used in error handling
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }
    
    }


    /* --------------------------------------------  Delete  -------------------------------------------------- */

    function deleteById($DbConfig, $id) {

        // Connect to database and return connection object
        $connection = $DbConfig->connectToDatabase();
    
        // delete from user table where id == $id parameter
        $statement = "DELETE FROM user WHERE id=$id";
    
        // Send request
        if ($result = $connection->query($statement)) {
            
            $connection->close();
            return $result; // either true or false
    
        } else {
            // die function is used to kill connection to database and usually used in error handling
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }
    
    }
}