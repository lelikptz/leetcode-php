<?php

declare(strict_types=1);

namespace Problems\Easy\BinaryTreePreorderTraversal;

use Structure\TreeNode;

final class Solution
{
    /**
     * @param TreeNode|null $root
     * @return int[]
     */
    public function preorderTraversal(?TreeNode $root): array
    {
        /** @var TreeNode[] $queue */
        $queue = [];
        $result = [];
        $node = $root;

        while ($node !== null || !empty($queue)) {
            while ($node !== null) {
                $result[] = $node->val;
                $queue[] = $node;
                $node = $node->left;
            }
            $node = array_pop($queue);
            $node = $node->right;
        }

        return $result;
    }
}
