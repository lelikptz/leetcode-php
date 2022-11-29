<?php

declare(strict_types=1);

namespace Problems\Simple\BinaryTreePostorderTraversal;

use Structure\TreeNode;

final class Solution
{
    /**
     * @param TreeNode|null $root
     * @return int[]
     */
    public function postorderTraversal(?TreeNode $root): array
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
        $this->visit($values, $node->right);
        $values[] = $node->val;
    }
}
