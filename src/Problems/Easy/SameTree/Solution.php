<?php

declare(strict_types=1);

namespace Problems\Easy\SameTree;

use Structure\TreeNode;

final class Solution
{
    public function isSameTree(TreeNode $p, TreeNode $q): bool
    {
        return $this->check($p, $q);
    }

    private function check(?TreeNode $p, ?TreeNode $q): bool
    {
        if ($p === null && $q === null) {
            return true;
        }
        if ($p === null && $q !== null) {
            return false;
        }
        if ($p !== null && $q === null) {
            return false;
        }

        return
            $p->val === $q->val
            && $this->check($p->left, $q->left)
            && $this->check($p->right, $q->right);
    }
}
