<?php

$numbers = array("red", "green", "blue", "black");

$numbersLength = count($numbers);

for ($i = 0; $i < $numbersLength; $i++) {
    $element = $numbers[$i];

    for ($j = 0; $j < strlen($element); $j++) {
        echo $element[$j] . "\n";
    }
}


