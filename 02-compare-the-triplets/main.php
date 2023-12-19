<?php

function solution(array $first, array $second)
{
    $results = [0, 0];

    for ($i = 0; $i < count($first); $i++) {
        if ($first[$i] > $second[$i]) {
            $results[0] += 1;

        } else if ($first[$i] < $second[$i]) {
            $results[1] += 1;
        }
    }
    return $results;
}

print_r(solution([1, 2, 3], [3, 2, 1]));
