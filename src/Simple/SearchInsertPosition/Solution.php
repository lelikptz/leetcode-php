<?php

declare(strict_types=1);

namespace Simple\SearchInsertPosition;

final class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    public function searchInsert(array $nums, int $target): int {
        if (in_array($target, $nums, true)) {
            return array_search($target, $nums, true);
        }


        foreach ($nums as $key => $num) {
            if ($num > $target) {
                return $key;
            }
        }

        return count($nums);
    }
}
