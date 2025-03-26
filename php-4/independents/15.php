<?php
function max_in_array($arr) {
    $arr = (array_unique($arr));
    rsort($arr);
    return $arr[1];
}
$arr = [1,2,6,2,4];

print(max_in_array($arr));