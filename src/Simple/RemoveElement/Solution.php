<?php

declare(strict_types=1);

namespace Simple\RemoveElement;

final class Solution
{
    /**
     * @param int[] $nums
     * @param int $val
     * @return int
     */
    public function removeElement(array &$nums, int $val): int
    {
        foreach ($nums as $key => $num) {
            if ($num === $val) {
                unset($nums[$key]);
            }
        }
        $nums = array_values($nums);

        return count($nums);
    }
}
