<?php

$sum = 0;

$arr = array("hello");
$string = $arr[0];

$length = strlen($string);

for ($i = 0; $i < $length; $i++) {
    $char = $string[$i];

    if ($char == "e" || $char == "a" || $char == "i" || $char == "o" || $char == "u") {
        $sum++;
    }
}

echo $sum;