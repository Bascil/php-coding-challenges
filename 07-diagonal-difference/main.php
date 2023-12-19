<?php

function solution($matrix = array(array()))
{
    $sum = [0, 0];
    for ($i = 0; $i < count($matrix); $i++) {
        $sum[0] += $matrix[$i][$i];
        $sum[1] += $matrix[$i][count($matrix) - $i - 1];
    }

    return abs($sum[0] - $sum[1]);
}

$array = array(array());

$array[0][0] = 1;
$array[0][1] = 2;
$array[0][2] = 3;
$array[1][0] = 4;
$array[1][1] = 5;
$array[1][2] = 6;
$array[2][0] = 9;
$array[2][1] = 8;
$array[2][2] = 9;

echo solution($array);
