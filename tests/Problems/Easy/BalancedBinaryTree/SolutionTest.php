<?php

declare(strict_types=1);

namespace tests\Problems\Easy\BalancedBinaryTree;

use PHPUnit\Framework\TestCase;
use Problems\Easy\BalancedBinaryTree\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode|null $root
     * @param bool $expected
     * @return void
     */
    public function isBalanced(?TreeNode $root, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->isBalanced($root);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [null, true],
                [new TreeNode(1), true],
                [new TreeNode(
                    val: 0,
                    left: new TreeNode(
                        val: 0,
                        left: new TreeNode(
                            val: 0,
                            left: null,
                            right: null,
                        ),
                        right: null,
                    ),
                    right: new TreeNode(
                        val: 0,
                        left: null,
                        right: null,
                    ),
                ), true],
                [new TreeNode(
                    val: 0,
                    left: new TreeNode(
                        val: 0,
                        left: new TreeNode(
                            val: 0,
                            left: null,
                            right: new TreeNode(
                                val: 0,
                                left: null,
                                right: null,
                            ),
                        ),
                        right: null,
                    ),
                    right: new TreeNode(
                        val: 0,
                        left: null,
                        right: null,
                    ),
                ), false],
                [new TreeNode(
                    val: 1,
                    left: new TreeNode(
                        val: 2,
                        left: new TreeNode(
                            val: 3,
                            left: new TreeNode(
                                val: 4,
                                left: null,
                                right: null,
                            ),
                            right: null,
                        ),
                        right: null,
                    ),
                    right: new TreeNode(
                        val: 2,
                        left: null,
                        right: new TreeNode(
                            val: 3,
                            left: null,
                            right: new TreeNode(
                                val: 4,
                                left: null,
                                right: null,
                            ),
                        ),
                    ),
                ), false],
            ];
    }
}
