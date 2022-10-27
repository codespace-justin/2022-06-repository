<?php

# FOR Loop : runs a set amount / for a certain number of iterations

# While loop : runs while a certain conditoin is true

# Do While : same as while loop, but it runs at least once (ignore condition on first iteration)


$names = ['sdughwe', 'sjhfbhwegkjg', 'qiufhwj', "drlkhjrek", "sghjweriyj"];
$color = ['black', 'brown', 'blond', 'blue', "grey"];
$age = [20, 50, 25, 99, 10];

$class = [];

// creates 5 people assoc arrays and pushes them into the $class array
for ($i=0; $i < 5 ; $i++) { 

    $person = [
        "name" => $names[$i],
        "color" => $color[$i],
        "age" => $age[$i]
    ];

    array_push($class, $person);
}

// prints out each individual assoc array
for ($i=0; $i < count($class) ; $i++) { 

    var_dump($class[$i]);
    echo "<hr>";

}