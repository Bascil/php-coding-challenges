<?php

echo solution(2, 5, 4);
function solution(int $x, int $y, int $z)
{
    if (absolute($x - $z) == absolute($y - $z)) {
        return "Mouse C";
    } else if (absolute($x - $z) < absolute($y - $z)) {
        return "Cat A";
    } else {
        return "Cat B";
    }

}

function absolute($num)
{
    if ($num < 0) {
        return $num * -1;
    }

    return $num;
}
