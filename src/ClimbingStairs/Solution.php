<?php

declare(strict_types=1);

namespace ClimbingStairs;

final class Solution
{
    public function climbStairs(int $n): int
    {
        $arr = [1 => 1, 2 => 2];
        for ($i = 3; $i <= 45; $i++) {
            $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
        }

        return $arr[$n];
    }
}
