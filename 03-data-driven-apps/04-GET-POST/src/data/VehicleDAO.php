<?php

namespace DataAccessObjects;

use Models\Vehicle;

class VehicleDAO {


    public function create($DbConfig, $Vehicle) {

        $connection = $DbConfig->connectToDatabase();

        // SQL statement
        $statement = "INSERT INTO vehicle (type, brand, displacement)" .
                     "VALUES ('".$Vehicle->getType()."','".$Vehicle->getBrand()."','".$Vehicle->getDisplacement()."')";

        // Send request
        if ($result = $connection->query($statement)) {

            $connection->close();
            return $result; // either true or false

        } else {

            die("Connection failed: " . $connection->error);
        }
    }

    /* --------------------------------------------  Read All  -------------------------------------------------- */

    public function readAll($DbConfig) {

        $connection = $DbConfig->connectToDatabase();

        $usersFromDb = [];

        $statement = "SELECT * FROM user";

        if ($result = $connection->query($statement)) {


            while($row = $result->fetch_object()) {

                $vehicleObject = new Vehicle($row->type, $row->brand, $row->displacement);

                $vehicleObject->setId($row->id);

                array_push($usersFromDb, $vehicleObject);
            } 
            
            $connection->close();
            return $usersFromDb;           
            
        } else {

            echo $connection->error;
            die("Connection failed: " . $connection->error); 
        }

        $connection->close();
    }


    /* --------------------------------------------  Update  -------------------------------------------------- */

    function updateById($DbConfig, $id, $type, $brand, $displacement) {

        $connection = $DbConfig->connectToDatabase();

        $statement = "  UPDATE vehicle 
                        SET type='$type', brand='$brand' , displacement='$displacement' 
                        WHERE id='$id'";

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

        $connection = $DbConfig->connectToDatabase();

        $statement = "DELETE FROM user WHERE id=$id";
   
        if ($result = $connection->query($statement)) {
            
            $connection->close();
            return $result; 
    
        } else {
    
            die("Connection failed: " . $connection->error); //die function to close connection in case of error
        }
    
    }
    
}