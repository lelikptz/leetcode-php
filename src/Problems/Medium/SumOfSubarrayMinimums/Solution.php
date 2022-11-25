<?php

declare(strict_types=1);

namespace Problems\Medium\SumOfSubarrayMinimums;

use SplStack;

final class Solution
{
    /**
     * @param int[] $arr
     * @return int
     */
    public function sumSubarrayMins(array $arr): int
    {
        if (count($arr) === 1) {
            return $arr[0];
        }

        $stack = new SplStack();
        $stack->push($arr);
        $sum = 0;
        $unique = [$arr];
        while (!$stack->isEmpty()) {
            $cur = $stack->pop();
            if (count($cur) > 1) {
                $a = array_slice($cur, 0, count($cur) - 1);
                if (!in_array($a, $unique, true) && count($a) > 1) {
                    $stack->push($a);
                    $unique[] = $a;
                }

                $b = array_slice($cur, 1);
                if (!in_array($b, $unique, true) && count($b) > 1) {
                    $stack->push($b);
                    $unique[] = $b;
                }
            }

            $sum += min($cur);
        }

        return $sum + array_sum($arr);
    }
}
