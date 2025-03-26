<?php
 function generatePassword(int $length): string {
     $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
     $password = '';
     $max = strlen($chars) - 1;

     for ($i = 0; $i < $length; $i++) {
         $password .= $chars[random_int(0, $max)];
     }
     return $password;
 }

 $password = generatePassword(12);
 echo $password; 