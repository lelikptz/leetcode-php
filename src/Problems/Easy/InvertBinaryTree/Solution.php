<?php

declare(strict_types=1);

namespace Problems\Easy\InvertBinaryTree;

use Structure\TreeNode;

final class Solution
{
    public function invertTree(?TreeNode $root): ?TreeNode
    {
        if ($root === null) {
            return null;
        }

        [$root->left, $root->right] = [
            $this->invertTree($root->right),
            $this->invertTree($root->left)
        ];

        return $root;
    }
}
