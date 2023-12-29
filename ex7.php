<?php

function solve($arr)
{
    $tabs = (int)$arr[0];
    $salary = (int)$arr[1];

    for ($i = 2; $i < count($arr); $i++) {


        if ($arr[$i] == "Facebook") {
            $salary -= 150;
        } else if ($arr[$i] == "Reddit") {
            $salary -= 50;
        } else if ($arr[$i] == "Instagram") {
            $salary -= 100;
        }
    }

    echo $salary;
}


$arr = array(
    "10", "500",
    "Facebook",
    "Stackoverflow.com",
    "softuni.bg"
);
solve($arr);
