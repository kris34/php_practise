<?php

$numsArr = array("12345");
$stringNum = $numsArr[0];
$sum = 0;

for($i = 0; $i < strlen($stringNum); $i++) { 
    $int = (int)$stringNum[$i];
    $sum += $int;
}

echo $sum;
