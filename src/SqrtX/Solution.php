<?php

declare(strict_types=1);

namespace SqrtX;

final class Solution
{
    /**
     * @param int $x
     * @return int
     */
    function mySqrt(int $x): int
    {
        $result = 0;
        $test = 0;
        while ($test < $x) {
            $result++;
            $test = $result * $result;
        }
        if ($test > $x) {
            $result--;
        }

        return (int)round($result, 0, PHP_ROUND_HALF_DOWN);
    }
}
