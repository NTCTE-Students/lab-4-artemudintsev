<?php
 function sumDigitsString(int $number): int {
    $number = abs($number); 
    $digits = str_split((string)$number);
    $sum = 0;
    foreach ($digits as $digit) {
        $sum += (int)$digit;
    }
    return $sum;
    }

    $number = 13579;
    $sum = sumDigitsString($number);
    echo "Сумма цифр числа $number: $sum";