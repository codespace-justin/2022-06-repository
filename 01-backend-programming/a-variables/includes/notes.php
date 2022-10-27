<?php

// ========== Data Types included in PHP ==========

    $string = "String";

    $integer = 8;

    $boolean = false;

    $float = 100.50;

    $array = [];

    $object = new stdClass();

// ========== Printing and Displaying ==========

    // ECHO : allows us to render content and output it to the browser
    /*
        - uses single quotes or double quotes
        - can concatenate variables or data into the echo string
        - output type will always be of type "string"
     */
    echo $integer;


    // BREAK :
    /*
        standard html break tags are what use for line breaks
        the normal escape character for next line ('\n') wont work unless we are inside the
        console, since the browser cant understand it.
    */
    echo "<br>";


    // VAR_DUMP : 
    /*
        - acts as the de-facto print or debugger function and prints 
          out data/variables with extra information such datatype, character lenght, etc
        
        - also used to print out complex types such as objects and arrays since they cannot be echoed
    */
    var_dump($integer . $string);