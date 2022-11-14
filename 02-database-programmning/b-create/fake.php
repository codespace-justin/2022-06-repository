<?php

class UserDAO {

    function readById($id) {
        // returns new User object;
    }

    function update() {
        // sql to save to new user to database
    }

}

class User {

    function updateUser($DAO) {

        $currentUser = $DAO->readById(2);

        if ( isset($_POST['updateUser']) ) {

            $updatedUser = new User($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['address']);

            $updatedUser->setId( $currentUser->getId() );

            $DAO->update($updatedUser);
        }
    }
}

