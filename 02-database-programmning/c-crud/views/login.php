<?php
// ======================================== PHP ========================================

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    session_start();

    require_once __DIR__ . "/../model/User.php";
    require_once __DIR__ . "/../model/UserDAO.php";
    require_once __DIR__ . "/../config/DbConfig.php";

    // ---- Tests ----

    $dbConfig = new DbConfig();
    $mockUser = new User("Guest", "guest01!", 'guest@guest.com', "customer");
    $userDao = new UserDAO();

    if (isset($_POST['login'])) {

        $postUsername = $_POST['username'];
        $postPassword = $_POST['password'];
        
        $loggedInUser = $userDao->readByUsername($dbConfig, $postUsername, $postPassword);

        if ($loggedInUser) {
            var_dump($loggedInUser);
        }
        
    }


    //$userDao->createUser($dbConfig, $mockUser);

// ======================================== Page ========================================
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style> 
        .columns {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            padding: 0 10vw;
        }
    </style>
</head>
<body>

    <h1>
        Login
    </h1>

    <section class="columns">

        <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h3>Login</h3>
            <input type="text" name="username" placeholder="Please enter username..">
            <input type="password" name="password" placeholder="Please enter password..">
            <button type="submit" name="login">
                Log In
            </button>
            <?php
                if(isset($_POST['login']) && $loggedInUser == null) {
                    echo "
                        <p style='color:red;'>
                            Please login as a registered user or enter a correct pasword..
                        </p>
                    ";
                }
            ?>
        </form>   

        <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h3>
                Register
            </h3>
            <input type="text" name="username" placeholder="Please enter username..">
            <input type="password" name="password" placeholder="Please enter password..">
            <input type="email" name="email" placeholder="Please enter email address..">
            <button type="submit" name="register">
                Register
            </button>
        </form>

    </section>


</body>
</html>