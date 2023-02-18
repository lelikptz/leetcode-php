<?php

declare(strict_types=1);

namespace Problems\Easy\MinimumDepthOfBinaryTree;

use SplQueue;
use Structure\TreeNode;

final class Solution
{
    public function minDepth(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        $depth = 1;
        $queue = new SplQueue();
        $queue->enqueue($root);

        while (!$queue->isEmpty()) {
            $count = $queue->count();
            for ($i = 0; $i < $count; $i++) {
                /** @var TreeNode $cur */
                $cur = $queue->dequeue();
                if ($cur->left === null && $cur->right === null) {
                    return $depth;
                }
                if ($cur->left !== null) {
                    $queue->enqueue($cur->left);
                }
                if ($cur->right !== null) {
                    $queue->enqueue($cur->right);
                }
            }

            $depth++;
        }

        return $depth;
    }

    public function minDepthRecursion(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }
        if ($root->left === null && $root->right === null) {
            return 1;
        }

        $lDepth = $this->minDepth($root->left) + 1;
        $rDepth = $this->minDepth($root->right) + 1;

        if ($root->right === null) {
            return $lDepth;
        }

        if ($root->left === null) {
            return $rDepth;
        }

        return min($lDepth, $rDepth);
    }
}
