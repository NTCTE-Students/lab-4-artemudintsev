<?php
 function exec12($num) {
    $count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }
    if ($count == 2 || $num == 1) {
        return"Простое";
    } else {
        return"No";

    }
}
print(exec12(4));