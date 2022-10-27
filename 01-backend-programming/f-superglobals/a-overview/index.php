<?php

// ======================================== Setup ============================================

    // the session_start function allows us to use sessions and cookies on a PHP script
    // and also creates a SESSION_ID cookie inside the users browser so they can be tracked   
    session_start();

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');


// ======================================== Responses to requests ============================================

    # Get request response
    if (isset($_GET['submit'])) {

        echo "You sent a GET request" . "<br>";
        echo $_GET["theUsername"] . "<br>";
        echo $_GET["theText"];

        // create a new cookie that holds the username entered
        setcookie("username", $_GET['theUsername']);
    }


    # Post request response
    if (isset($_POST['submit'])) {

        echo "You sent a POST request" . "<br>";
        echo $_POST["theUsername"] . "<br>";
        echo $_POST["theText"];

        // save the username to the session SuperGlobal
        $_SESSION['username'] = $_POST['theUsername'];
    }


    # delete all variables in our session superglobal and delete cookie or username
    if (isset($_GET['logout'])) {

        session_unset(); // unsets all session variables
        session_destroy(); // completely deletes session

        setcookie("username", "", time()-3600); // deletes username cookie

        // should throw error since all session variables on current client should be deleted
        echo $_SESSION['username'];
    }
?>

<!-- ======================================== Webpage ============================================ -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SuperGlobal Basics</title>
    </head>
    <body>

        <!--
            Use the server SuperGlobal and the PHP_SELF key whos value contains the
            location of this file since we want to send our request to this same page
        -->

        <!-- GET form -->
        <h2>GET</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <input type="text" name="theUsername" required placeholder="the username">
            <input type="text" name="theText" required placeholder="the text">
            <input type="submit" value="Submit" name="submit">
        </form>

        <hr>
        
        <!-- POST form -->
        <h2>
            POST
        </h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="theUsername" required placeholder="the username">
            <input type="text" name="theText" required placeholder="the text">
            <input type="submit" value="Submit" name="submit">
        </form>

        <hr>

        <?php
            // logout form is only displayed if a session is active and username is isset
            if ( isset( $_SESSION['username'] ) ) {
        ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <button type="submit" name="logout" value="true">Logout</button>
            </form>
        <?php
            } 
        ?>

    </body>
</html>

<!-- 

        $_GET = [];

        // once get request is made

        $_GET = [
            "theUsername" => "whatatever is in the input file",
            "theText" => "whatatever is in the input file",
            "submit" => "Submit"
        ];

        echo $_GET['theText'];


 -->

