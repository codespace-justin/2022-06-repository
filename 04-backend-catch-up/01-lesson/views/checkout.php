<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>
</head>
<body>
    <h1>
        Select and Pay
    </h1>

    <h2>
        Subtotal for all items: R<?php echo $_SESSION['subTotal'] ?>
    </h2>

    <form action="" method="get">
        <button type="submit">Pay with card</button>
        <button type="submit">Pay with cash</button>
    </form>

</body>

</html>