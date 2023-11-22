<?php

function solution(array $N)
{
    $duplicates = [];
    for ($i = 0; $i < count($N); $i++) {
        if (is_integer($N[$i])) {
            if (!array_key_exists($N[$i], $duplicates)) {
                $duplicates[$N[$i]] = 1;
            } else {
                unset($duplicates[$N[$i]]);
            }
        }
    }

    return key($duplicates);
}

print_r(solution([9, 3, 9, 3, 9, 7, 9]));
