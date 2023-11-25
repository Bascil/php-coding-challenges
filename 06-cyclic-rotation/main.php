<?php

function solution(array $A, int $K)
{
    if (empty($A)) {
        return [];
    }

    $length = count($A);
    $rotated = [];

    while ($K > 0) {
        $last = $A[$length - 1];
        $rotated[0] = $last;

        for ($i = 0; $i < $length - 1; $i++) {
            $rotated[] = $A[$i];
        }

        $A = $rotated;
        $rotated = [];
        $K--;
    }

    return $A;
}

print_r(solution([3, 8, 9, 7, 6], 3));
