<?php

function solve($arr)
{
    $age  =  (int)$arr[0];
    $loundryPrice = (int)$arr[1];
    $toyPrice = (int)$arr[2];

    $startMoney = 10;
    $collectedMoney = 0;

    for ($i = 1; $i <= $age; $i++) {
        if ($i % 2 == 0) {

            $collectedMoney += $startMoney;
            $collectedMoney -= 1;
            $startMoney += 10;
        } else {
            $collectedMoney += $toyPrice;
        }
    }

    if ($collectedMoney >=  $loundryPrice) {
        echo "$" . $collectedMoney . " is enough!";
    } else {
        echo "$" . $collectedMoney . " is not enough!";
    }
};

$arr = array("21", "1570", "3");
solve($arr);
