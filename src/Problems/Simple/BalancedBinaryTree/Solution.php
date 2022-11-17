<?php

declare(strict_types=1);

namespace Problems\Simple\BalancedBinaryTree;

use Structure\TreeNode;

final class Solution
{
    public function isBalanced(?TreeNode $root): bool
    {
        if ($root === null) {
            return true;
        }

        $lDepth = $this->getDepth($root->left);
        $rDepth = $this->getDepth($root->right);

        return abs($lDepth - $rDepth) <= 1 && $this->isBalanced($root->left) && $this->isBalanced($root->right);
    }

    private function getDepth(?TreeNode $node): int
    {
        if ($node === null) {
            return 0;
        }

        return 1 + max($this->getDepth($node->right), $this->getDepth($node->left));
    }
}
