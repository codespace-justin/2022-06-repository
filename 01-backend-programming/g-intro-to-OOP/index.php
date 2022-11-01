<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <?php
    // instanciations
    $student1 = new CodespaceStudent("Thato", "Molefe6545843");
    $student2 = new CodespaceStudent("Duane", "guest");

    //using setter
    $student2->setStudentNumber("slighjrek");

    $student2->missedClass();
    $student2->missedClass();
    $student2->missedClass();

    echo$student1;
    echo "<br>";
    echo$student2;
    ?>
</body>
</html>