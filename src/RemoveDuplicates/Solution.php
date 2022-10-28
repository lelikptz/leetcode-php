<?php

declare(strict_types=1);

namespace RemoveDuplicates;

final class Solution
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function removeDuplicates(array &$nums): int
    {
        $nums = array_values(array_unique($nums));

        return count($nums);
    }
}
