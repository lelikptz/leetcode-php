<?php

declare(strict_types=1);

namespace Problems\Simple\SymmetricTree;

use Structure\TreeNode;

final class Solution
{
    /**
     * @param TreeNode $root
     * @return bool
     */
    public function isSymmetric(TreeNode $root): bool
    {
        return $this->check($root->left, $root->right);
    }

    private function check(?TreeNode $p, ?TreeNode $q): bool
    {
        if (($p !== null && $q === null) || ($p === null && $q !== null)) {
            return false;
        }

        return
            ($p === null && $q === null)
            ||
            (
                $p->val === $q->val
                &&
                $this->check($p->left, $q->right)
                &&
                $this->check($p->right, $q->left)
            );
    }
}
