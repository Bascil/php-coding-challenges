<?php

function solution(int $k, array $arr)
{
    $pairs = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if (($arr[$i] + $arr[$j]) % $k == 0) {
                $pairs++;
            }
        }
    }

    return $pairs;
}

echo solution(5, [1, 2, 3, 4, 5, 6]);
