<?php

declare(strict_types=1);

namespace Problems\Easy\KthMissingPositiveNumber;

final class Solution
{
    public function findKthPositive(array $arr, int $k): int
    {
        $count = 0;
        $i = 0;
        foreach (range(1, count($arr) + $k) as $number) {

            if (!isset($arr[$i]) || $arr[$i] !== $number) {
                $count++;
            } else {
                $i++;
            }

            if ($count === $k) {
                return $number;
            }
        }

        return 0;
    }
}
