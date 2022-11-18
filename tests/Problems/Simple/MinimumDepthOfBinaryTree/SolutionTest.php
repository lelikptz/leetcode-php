<?php

declare(strict_types=1);

namespace tests\Problems\Simple\MinimumDepthOfBinaryTree;

use PHPUnit\Framework\TestCase;
use Problems\Simple\MinimumDepthOfBinaryTree\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProviderList
     * @param TreeNode|null $node
     * @param int $expected
     * @return void
     */
    public function minDepth(?TreeNode $node, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->minDepth($node);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     * @dataProvider dataProviderList
     * @param TreeNode|null $node
     * @param int $expected
     * @return void
     */
    public function minDepthRecursion(?TreeNode $node, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->minDepth($node);

        $this->assertEquals($expected, $actual);
    }

    public function dataProviderList(): array
    {
        return [
            [
                new TreeNode(3,
                    left: new TreeNode(9),
                    right: new TreeNode(20,
                        left: new TreeNode(15),
                        right: new TreeNode(7)
                    ),
                ),
                2
            ],
            [
                new TreeNode(2,
                    right: new TreeNode(3,
                        right: new TreeNode(4,
                            right: new TreeNode(5,
                                right: new TreeNode(6)
                            )
                        )
                    ),
                ),
                5
            ],
        ];
    }
}
