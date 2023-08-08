<?php
function odd_or_even(array $numbers): string
{
    if ($numbers == 0 || empty($numbers)) {
        return 'even';
    }

    return  array_sum($numbers) % 2 == 0 ? 'even' : 'odd';
}
