<?php

declare(strict_types=1);

namespace tests\Problems\Simple\SymmetricTree;

use PHPUnit\Framework\TestCase;
use Problems\Simple\SymmetricTree\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode $tree
     * @param bool $expected
     * @return void
     */
    public function isSymmetric(TreeNode $tree, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->isSymmetric($tree);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            [new TreeNode(1,
                new TreeNode(2, new TreeNode(4), new TreeNode(3)),
                new TreeNode(2, new TreeNode(3), new TreeNode(4))),
                true
            ],
            [new TreeNode(1, null, new TreeNode(2, new TreeNode(3), null)), false],
        ];
    }
}
