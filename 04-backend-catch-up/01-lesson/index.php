<?php

    include_once __DIR__ . "/include/data.php";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

    if ( !isset($_SESSION['subTotal']) ) {
        
        $_SESSION['subTotal'] = 0;
    }
    

    if ( isset($_POST['selectedItemValue']) ) {

        $_SESSION['subTotal'] = $_POST['selectedItemValue'] + $_SESSION['subTotal'];

        echo $_SESSION['subTotal'];
    }

 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/style.css">
</head>
<body>
    <h1>
        Select and Pay
    </h1>

    <hr>

    <section >
    <form class="items" action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
            for ($i=0; $i < count($items); $i++) { 
        ?>   
            <button type="submit" name="selectedItemValue" value="<?php echo $items[$i]['price']; ?>" class="item">
                <h3>
                    Item <?php $i ?> 
                </h3>
                <li>
                    barcode: <?php echo $items[$i]['barcode']; ?> 
                </li>
                <li>
                    name <?php echo $items[$i]["name"]; ?> 
                </li>
                <li>
                    price <?php echo $items[$i]['price']; ?> 
                </li>
            </button>
        <?php
            }
        ?>
    </form>
    </section>

    <form action="./views/checkout.php" method="get">
        <input type="hidden" name="subTotal" value="<?php echo $_SESSION['subTotal']; ?>">
        <button type="submit">
            Proceed to payment
        </button>
    </form>

    <br>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>

    <section class="items">
        <?php
            for ($i=0; $i < count($items); $i++) { 
  
            echo "
                <ul class='item'>
                    <h3>Item <?php $i ?> </h3>
                    <li>barcode: " . $items[$i]['barcode'] . "</li>
                    <li>name " . $items[$i]['name'] . "</li>
                    <li>price" . $items[$i]['price'] . "</li>
                </ul>
            ";
            }
        ?>
    </section>

</body>
</html>