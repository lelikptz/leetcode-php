<?php

declare(strict_types=1);

namespace tests\Problems\Easy\BinaryTreePreorderTraversal;

use PHPUnit\Framework\TestCase;
use Problems\Easy\BinaryTreePreorderTraversal\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode|null $root
     * @param array $expected
     * @return void
     */
    public function preorderTraversal(?TreeNode $root, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->preorderTraversal($root);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [null, []],
                [new TreeNode(1), [1]],
                [new TreeNode(1, null, new TreeNode(2, new TreeNode(3), null)), [1, 2, 3]],
            ];
    }
}
