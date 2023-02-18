<?php

declare(strict_types=1);

namespace tests\Problems\Easy\BinaryTreeInorderTraversal;

use PHPUnit\Framework\TestCase;
use Problems\Easy\BinaryTreeInorderTraversal\Solution;
use Structure\TreeNode;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode|null $root
     * @param array $expected
     * @return void
     */
    public function inorderTraversal(?TreeNode $root, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->inorderTraversal($root);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode|null $root
     * @param array $expected
     * @return void
     */
    public function inorderTraversalRecursive(?TreeNode $root, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->inorderTraversalRecursive($root);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [null, []],
                [new TreeNode(1), [1]],
                [new TreeNode(1, null, new TreeNode(2, new TreeNode(3), null)), [1, 3, 2]],
            ];
    }
}
