<?php

declare(strict_types=1);

namespace Problems\Easy\ConvertSortedArrayToBinarySearchTree;

use Structure\TreeNode;

final class Solution
{
    /**
     * @param int[] $nums
     * @return TreeNode|null
     */
    public function sortedArrayToBST(array $nums): ?TreeNode
    {
        if (empty($nums)) {
            return null;
        }

        $k = (int)round(count($nums) / 2, 10);

        return new TreeNode(
            val: $nums[$k],
            left: $this->sortedArrayToBST(array_slice($nums, 0, $k)),
            right: $this->sortedArrayToBST(array_slice($nums, $k + 1)),
        );
    }
}
