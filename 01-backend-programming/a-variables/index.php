<?php
    include __DIR__ . "/includes/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The poage</title>
</head>
    <body>
        
        This is a page

        <ul>
            <?php
                for ($i=0; $i < count($pageList); $i++) { 

                    echo "
                        <li class='item'>
                            <button>" . $pageList[$i] . "</button>
                         </li>
                    ";
                }
            ?>
        </ul>

    </body>
</html>