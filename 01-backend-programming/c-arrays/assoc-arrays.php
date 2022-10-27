<?php

// indexed - starts at 0, use integers as keys

$names = ["Duane", "Justin",  "Chanique", "Mfundo"];

# var_dump($names);

# echo "<br>" . $names[0];

// Associative Array : collection of different names

$namesAssoc = [
    "1" => "Duane", 
    "2" =>"Justin",  
    "4" =>"Chanique", 
    "7" =>"Mfundo"
];


// echo "<br>" . $namesAssoc["1"];

// Associative Array : student object


$studentArray = [
    [
        "name" => "Duane", 
        "lastname" =>"Scheepers",  
        "studentNo" =>"47"
    ],
    [
        "name" => "Chanique", 
        "lastname" =>"Lombard",  
        "studentNo" =>"12"
    ]
];

// ========== Nested Loop ==============

for ($i=0 ; $i < count($studentArray) ; $i++) { 
    
    foreach ($studentArray[$i] as $key => $value) {
        echo "<li>$key -  $value </li>";
    }
    echo "<hr>";
}

// ==========  Loop - destructuring ==============

for ($i=0 ; $i < count($studentArray) ; $i++) { 
    
    echo '
        <li> name - ' . $studentArray[$i]['name'] . ' </li>
        <li> lastname - ' . $studentArray[$i]['lastname'] . ' </li>
        <li> studentNo - ' . $studentArray[$i]['studentNo'] . ' </li>
        <hr>
    ';
}