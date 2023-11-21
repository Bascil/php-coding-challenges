<?php

function solution(int $number): int
{
    $gaps = [];
    if (is_integer($number) && ($number >= 1 && $number <= 2147483647)) {
        $binary = decbin($number);
        $hasOne = false;
        $zeros = 0;
        for ($i = 0; $i < strlen($binary); $i++) {
            if ($binary[$i] == 1) {
                if (!$hasOne) {
                    $hasOne = true;
                    continue;
                }

                $gaps[] = $zeros;
                $zeros = 0;
            }
            $zeros++;
        }
    }
    return empty($gaps) ? 0 : max($gaps);
}

echo solution(1041);
echo solution(32);
echo solution(9);
echo solution(529);
