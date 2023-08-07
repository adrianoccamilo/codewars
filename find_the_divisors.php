<?php

function divisors(int $number): array|string
{
    $divisors = [];
    $except = [1, $number];

    for ($i = 1; $i <= $number; $i++) {

        $number % $i == 0 ? $divisors[] = $i : '';
    }



    if ($divisors == $except) {
        return  $number . ' is prime';
    }
    //array_diff results array starts at index 1
    //use array_values to reindex starting from 0
    return array_values(array_diff($divisors, $except));
}

var_dump(divisors(15));
