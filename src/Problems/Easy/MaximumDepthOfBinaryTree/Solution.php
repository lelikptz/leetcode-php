<?php

declare(strict_types=1);

namespace Problems\Easy\MaximumDepthOfBinaryTree;

use Structure\TreeNode;

final class Solution
{
    public function maxDepth(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        $left = $this->maxDepth($root->left);
        $right = $this->maxDepth($root->right);

        return $left > $right ? $left + 1 : $right + 1;
    }
}
