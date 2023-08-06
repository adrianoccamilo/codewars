<?php
/* Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.

Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case */

function countBits(int $n): int
{
    if ($n < 0) {
        return 0;
    }

    $numberInBinary =  decbin($n);
    return substr_count($numberInBinary, '1');
}


function countBitsWithLoop(int $number): int
{
    if ($number < 0) {
        return 0;
    }

    $numberInBinary =  str_split(decbin($number));


    $count = 0;
    foreach ($numberInBinary as $n) {
        if ($n == '1') {
            $count++;
        }
    }

    return $count;
}

echo countBitsWithLoop(1234);
