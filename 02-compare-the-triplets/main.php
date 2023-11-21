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

echo json_encode(solution([17, 28, 30], [99, 16, 8]));
