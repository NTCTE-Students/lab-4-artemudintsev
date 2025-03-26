<?php
function exer9(float $celsius): float {
    return ($celsius * 9/5) + 32;
    }

    $celsius = 10;
    $fahrenheit = exer9($celsius);
    echo "$celsius  Цельсия =  $fahrenheit  Фаренгейта"; 