<?php

declare(strict_types=1);

namespace Problems\Medium\SumOfSubarrayMinimums;

final class Solution
{
    private const LIMIT = 1000000007;

    /**
     * @param int[] $arr
     * @return int
     */
    public function sumSubarrayMins(array $arr): int
    {
        $sum = 0;
        for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
            $tmp = array_slice($arr, $i);
            $minIndex = null;
            for ($j = 0, $jMax = count($arr) - $i - 1; $j < $jMax; $j++) {
                $a = array_slice($tmp, 0, count($tmp) - $j);
                $minIndex = ($minIndex === null || $minIndex > count($tmp) - $j - 1) ? $this->findMinIndex($a) : $minIndex;
                $sum += $a[$minIndex];
                $sum %= self::LIMIT;
            }
        }

        return $sum + array_sum($arr);
    }

    private function findMinIndex(array $arr): int
    {
        $minKey = 0;
        foreach ($arr as $key => $item) {
            if ($item < $arr[$minKey]) {
                $minKey = $key;
            }
        }

        return $minKey;
    }
}
