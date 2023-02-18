<?php

declare(strict_types=1);

namespace Problems\Easy\UglyNumber;

final class Solution
{
    public function isUgly(int $n): bool
    {
        if ($n <= 0) {
            return false;
        }

        foreach ([2, 3, 5] as $num) {
            while ($n % $num === 0) {
                $n /= $num;
            }
        }

        return $n === 1;
    }
}
