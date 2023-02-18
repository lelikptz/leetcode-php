<?php

declare(strict_types=1);

namespace tests\Problems\Easy\SameTree;

use PHPUnit\Framework\TestCase;
use Problems\Easy\SameTree\Solution;
use Structure\TreeNode;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode $p
     * @param TreeNode $q
     * @param bool $expected
     * @return void
     */
    public function isSameTree(TreeNode $p, TreeNode $q, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->isSameTree($p, $q);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        $a = [1, 2, 3];
        $b = [1, 2, 3];
        $c = [1, 2, 3];
        $d = [1, 2, 3, 4];

        return
            [
                [$this->tree($a), $this->tree($b), true],
                [$this->tree($c), $this->tree($d), false],
            ];
    }


    public function tree(array &$list): ?TreeNode
    {
        if (empty($list)) {
            return null;
        }
        $val = array_shift($list);
        if ($val === null) {
            return null;
        }

        $node = new TreeNode($val);
        $node->right = $this->tree($list);
        $node->left = $this->tree($list);

        return $node;
    }
}
