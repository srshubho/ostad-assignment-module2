<?php

$first = 0;
$second = 1;
$current = 0;
$count = 0;
$range = 10;

while ($count < $range) {

    if ($first > 100) {
        break;
    }
    echo $first . " ";
    $current = $first + $second;
    $first = $second;
    $second = $current;
    $count++;
}


?>