<?php

declare(strict_types=1);

namespace Problems\Simple\BinaryTreeInorderTraversal;

use Structure\TreeNode;

final class Solution
{
    /**
     * @param TreeNode|null $root
     * @return int[]
     */
    public function inorderTraversal(?TreeNode $root): array
    {
        /** @var TreeNode[] $queue */
        $queue = [];
        $result = [];
        $node = $root;

        while ($node !== null || !empty($queue)) {
            while ($node !== null) {
                $queue[] = $node;
                $node = $node->left;
            }
            $node = array_pop($queue);
            $result[] = $node->val;
            $node = $node->right;
        }

        return $result;
    }

    public function inorderTraversalRecursive(?TreeNode $root): array
    {
        $values = [];
        $this->visit($values, $root);

        return $values;
    }

    private function visit(array &$values, ?TreeNode $node): void
    {
        if ($node === null) {
            return;
        }
        $this->visit($values, $node->left);
        $values[] = $node->val;
        $this->visit($values, $node->right);
    }
}
