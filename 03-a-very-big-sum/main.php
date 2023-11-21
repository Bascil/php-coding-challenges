<?php

function solution(array $nums): int
{
    $sum = 0;

    foreach ($nums as $num) {
        $sum += $num;
    }

    return $sum;
}

echo solution([1111111111111112222, 199999999992211]);
