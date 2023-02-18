<?php

declare(strict_types=1);

namespace Problems\Easy\SqrtX;

final class Solution
{
    public function mySqrt(int $x): int
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

        return $result;
    }
}
