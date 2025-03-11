<?php
function conv_date($date) {
    $date_arr =  explode('-', $date);
    return $date_arr[2] .'/'. $date_arr[1] .'/'. $date_arr[0];
}
print(conv_date('2025-04-11'));