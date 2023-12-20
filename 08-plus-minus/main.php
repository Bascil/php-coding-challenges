<?php

function solution(array $items)
{
    $counts = [0, 0, 0];
    for ($i = 0; $i < count($items); $i++) {
        switch ($items[$i]) {
            case $items[$i] > 1:
                $counts[0] += 1;
                break;

            case $items[$i] < 0:
                $counts[1] += 1;
                break;

            default:
                $counts[2] += 1;
                break;
        }
    }

    foreach ($counts as $count) {
        printf("%.6f\n", $count / count($items));
    }
}

echo solution([-4, 3, -9, 0, 4, 1]);
