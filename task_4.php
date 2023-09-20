<?php

function printFibonacci($n)
{
    $first = 0;
    $second = 1;
    $current = 0;


    for ($i = 1; $i <= $n; $i++) {
        echo $first . " ";
        $current = $first + $second;
        $first = $second;
        $second = $current;
    }
}


printFibonacci(15);
?>