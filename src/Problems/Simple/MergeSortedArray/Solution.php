<?php

declare(strict_types=1);

namespace Problems\Simple\MergeSortedArray;

final class Solution
{
    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     * @return void
     */
    public function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        array_splice($nums1, $m, count(
            array_slice($nums2, 0, $n)
        ), $nums2);

        sort($nums1);
    }
}
