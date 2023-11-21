<?php

function solution(array $nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }

    return $sum;
}

echo solution([1, 2, 3, 4, 5]);
