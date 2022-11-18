<?php

declare(strict_types=1);

namespace tests\Problems\Simple\PathSum;

use PHPUnit\Framework\TestCase;
use Problems\Simple\PathSum\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProviderList
     * @param TreeNode|null $node
     * @param int $sum
     * @param bool $expected
     * @return void
     */
    public function minDepth(?TreeNode $node, int $sum, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->hasPathSum($node, $sum);

        $this->assertEquals($expected, $actual);
    }

    public function dataProviderList(): array
    {
        return [
            [
                new TreeNode(
                    val: 5,
                    left: new TreeNode(
                        val: 4,
                        left: new TreeNode(
                            val: 11,
                            left: new TreeNode(7),
                            right: new TreeNode(2)
                        ),
                        right: null
                    ),
                    right: new TreeNode(
                        val: 8,
                        left: new TreeNode(
                            val: 13,
                            left: null,
                            right: null
                        ),
                        right: new TreeNode(
                            val: 4,
                            left: null,
                            right: new TreeNode(
                                val: 1,
                                left: null,
                                right: null,
                            )
                        )
                    ),
                ),
                22,
                true
            ],
            [
                new TreeNode(
                    val: 1,
                    left: new TreeNode(3,),
                    right: new TreeNode(2)
                ),
                5,
                false
            ],
        ];
    }
}
