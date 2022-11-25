<?php

declare(strict_types=1);

namespace Problems\Medium\SumOfSubarrayMinimums;

use SplStack;

final class Solution
{
    private const LIMIT = 1000000007;

    /**
     * @param int[] $arr
     * @return int
     */
    public function sumSubarrayMins(array $arr): int
    {
        $stack = new SplStack();
        $sum = 0;
        for ($i = 0, $iMax = count($arr); $i <= $iMax; $i++) {
            while (!$stack->isEmpty() && ($i === count($arr) || $arr[$stack->top()] >= $arr[$i])) {
                $mid = $stack->pop();
                $left = $stack->isEmpty() ? -1 : $stack->top();
                $right = $i;
                $count = ($mid - $left) * ($right - $mid) % self::LIMIT;
                $sum += ($count * $arr[$mid]) % self::LIMIT;
                $sum %= self::LIMIT;
            }

            $stack->push($i);
        }

        return $sum;
    }
}
