<?php
// ======================================== PHP ========================================



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