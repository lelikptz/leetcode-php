<?php

declare(strict_types=1);

namespace Problems\Medium\PerfectSquares;

final class Solution
{
    public function numSquares(int $n): int
    {
        $minSquaresRequired = [0, 1];

        for ($i = 2; $i <= $n; $i++) {
            $minSquaresRequired[$i] = PHP_INT_MAX;
            for ($j = 1; $i >= ($j * $j); $j++) {
                $minSquaresRequired[$i] = min($minSquaresRequired[$i], $minSquaresRequired[$i - ($j * $j)]);
            }

            $minSquaresRequired[$i]++;
        }

        return $minSquaresRequired[$n];
    }
}
