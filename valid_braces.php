<?php
/* Write a function that takes a string of braces, 
and determines if the order of the braces is valid. 
It should return true if the string is valid, and false if it's invalid.


All input strings will be nonempty, and will 
only consist of parentheses, brackets and curly braces: ()[]{}.
What is considered Valid?

A string of braces is considered valid if all braces are matched with the correct brace. 

EXEMPLES:

"(){}[]"   =>  True
"([{}])"   =>  True
"(}"       =>  False
"[(])"     =>  False
"[({})](]" =>  False

*/



function validBraces(string $braces)
{

    $braces_map = [
        '{'     => '}',
        '('     => ')',
        '['     => ']',
    ];

    $len_braces = strlen($braces);


    $found_braces = [];


    for ($i = 0; $i < $len_braces; $i++) {
        if (array_key_exists($braces[$i], $braces_map)) {
            array_push($found_braces, $braces[$i]);
            print_r($found_braces);
        } elseif (in_array($braces[$i], $braces_map)) {
            array_pop($found_braces);
        } else {
            return false;
        }
    }

    print_r($found_braces);


    return empty($found_braces);
}

var_dump(validBraces('[(])'));
