<?php
function exer7(string $string): int {
    $length = 0;
    $i = 0;
    while (isset($string[$i])) {
        $length++;
        $i++;
    }
    return $length;
}

$string = "123 123 123";
$length = exer7($string);
echo "Длина строки: " . $length; 
