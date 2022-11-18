<?php

declare(strict_types=1);

namespace Problems\Simple\PathSum;

use Structure\TreeNode;

final class Solution
{
    public function hasPathSum(?TreeNode $root, int $targetSum): bool
    {
        if ($root === null) {
            return false;
        }

        $queue = [[$root, $root->val]];

        while (!empty($queue)) {
            $current = array_shift($queue);

            if ($current[0]->right === null && $current[0]->left === null && $current[1] === $targetSum) {
                return true;
            }

            if ($current[0]->right !== null) {
                $queue[] = [$current[0]->right, $current[1] + $current[0]->right->val];
            }
            if ($current[0]->left !== null) {
                $queue[] = [$current[0]->left, $current[1] + $current[0]->left->val];
            }
        }

        return false;
    }
}
