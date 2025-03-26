<?php
function palindrome($str) {

    if ($str == strrev($str)) {
        return "Yes";
    } 
    else {
        return "No";
    }
}
print(palindrome("asd"));