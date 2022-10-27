<?php

// Conditionals:

// --------------------------------- IF Statement ---------------------------------------

/* Notes
 *
 * Used to resolve a condition if the condition is equal to true, the body of the IF statement will run. 
 * Can also be used to return TRUE
 * Takes more computing power since the condition needs to resolved or calculated 
 * 
*/

// Example

    $age = 21;

    if ($age > 0 || $age < 13 ) {

        echo "You are a child";

    } else if ($age > 12 || $age < 20 ) {

        echo "You are a teenager";

    } else if ($age > 19 || $age < 36 ) {

        echo "You are a young adult";

    } else if ($age > 35 || $age < 60 ) {

        echo "You are an adult";

    } else if ($age > 59 ) {

        echo "You are a pensionr";

    } else {
        echo "I don't know how old you are or you haven't been born..";
    }

// --------------------------------- Switch Case Statement ---------------------------------------

/* Notes 
 *
 * Makes use of comparison are opposed to resolving a condition
 * Takes in an input and compares the input to a list of cases to see if they are the same
 * If value of the input matches a case, the body of that case runs 
 * 
*/

// Example

    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }