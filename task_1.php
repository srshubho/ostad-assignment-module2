<?php

function printEvenNumbersFor($start, $end, $step)
{
    if ($start % 2 !== 0) {
        $start += 1;
    }
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
    echo PHP_EOL;
}

function printEvenNumbersWhile($start, $end, $step)
{
    if ($start % 2 !== 0) {
        $start += 1;
    }
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
    echo PHP_EOL;
}

function printEvenNumbersDoWhile($start, $end, $step)
{
    if ($start % 2 !== 0) {
        $start += 1;
    }
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
    echo PHP_EOL;
}

$start = 1;
$end = 20;
$step = 2;

echo "Even numbers using for loop: ";
printEvenNumbersFor($start, $end, $step);

echo "Even numbers using while loop: ";
printEvenNumbersWhile($start, $end, $step);

echo "Even numbers using do-while loop: ";
printEvenNumbersDoWhile($start, $end, $step);
?>