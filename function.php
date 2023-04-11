<?php
function passGenerator($length)
{
    $chars = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&*+?@[\]^_`~";
    $passRandom = array();
    $PassLength = strlen($chars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $number = rand(0, $PassLength);
        $passRandom[] =  $chars[$number];
    }
    return implode($passRandom);
}

?>