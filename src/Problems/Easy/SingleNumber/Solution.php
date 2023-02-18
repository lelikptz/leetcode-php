<?php

declare(strict_types=1);

namespace Problems\Easy\SingleNumber;

final class Solution
{
    /**
     * @param integer[] $nums
     * @return integer
     */
    public function singleNumber(array $nums): int
    {
        $map = array_count_values($nums);

        return array_flip($map)[1];
    }
}
