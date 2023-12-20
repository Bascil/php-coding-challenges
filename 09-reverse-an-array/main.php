<?php

function reverse(array $items)
{
    $reversed = [];

    for ($i = count($items) - 1; $i >= 0; $i--) {
        $reversed[] = $items[$i];
    }

    return $reversed;
}

print_r(reverse([1, 2, 3, 4, 5]));
