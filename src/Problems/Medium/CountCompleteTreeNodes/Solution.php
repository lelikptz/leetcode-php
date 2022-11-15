<?php

declare(strict_types=1);

namespace Problems\Medium\CountCompleteTreeNodes;

use Structure\TreeNode;

final class Solution
{
    private int $counter = 0;

    public function countNodes(?TreeNode $root): int
    {
        if ($root !== null) {
            $this->counter++;

            $this->countNodes($root->left);
            $this->countNodes($root->right);
        }

        return $this->counter;
    }
}
