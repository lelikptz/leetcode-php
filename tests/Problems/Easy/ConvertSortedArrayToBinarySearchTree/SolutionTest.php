<?php

declare(strict_types=1);

namespace tests\Problems\Easy\ConvertSortedArrayToBinarySearchTree;

use PHPUnit\Framework\TestCase;
use Problems\Easy\ConvertSortedArrayToBinarySearchTree\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $nums
     * @param TreeNode|null $expected
     * @return void
     */
    public function sortedArrayToBST(array $nums, ?TreeNode $expected): void
    {
        $solution = new Solution();

        $actual = $solution->sortedArrayToBST($nums);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [[], null],
                [[1, 3], new TreeNode(3, new TreeNode(1))],
                [[-10, -3, 0, 5, 9],
                    new TreeNode(
                        val: 0,
                        left: new TreeNode(
                            val: -3,
                            left: new TreeNode(-10),
                        ),
                        right: new TreeNode(
                            val: 9,
                            left: new TreeNode(5)
                        ),
                    )
                ],
            ];
    }
}
