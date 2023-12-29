<?php

function solve($num)
{

    for ($i = 0; $i < $num; $i++) {
        $sum = $i * $num;

        echo $sum . "\n";
    }
}

$num  = 10;
solve($num);
