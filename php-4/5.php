<?php
function sort_num(&$arr) {
    sort($arr) ;
    foreach ($arr as $value) {
        print $value;
    }
}
$array =[1,4,2,3,5];
sort_num($array);