<?php
function arr(&$arr) {
    $arr = array_unique($arr);
    return $arr;
}
$arr = [5,12, 15, 13, 21];
arr($arr);