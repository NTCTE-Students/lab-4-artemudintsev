<?php
function factorial($n) {
    $result = 1;
    for ($i = $n; $i != 0; $i--) {
        $result *= $i;
    }
    return $result;
}

$result = factorial(3);
print("Факториал 3: {$result}");