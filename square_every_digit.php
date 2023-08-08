<?php
function square_digits(int $num): int
{
    $str_num = (string)$num;
    $len_num = strlen($str_num);

    $num = '';
    if ($len_num > 1) {
        for ($i = 0; $i < $len_num; $i++) {
            $num .= pow($str_num[$i], 2);
        }
    } else {
        $num = pow($str_num, 2);
    }
    return $num;
}
echo square_digits(9119);
