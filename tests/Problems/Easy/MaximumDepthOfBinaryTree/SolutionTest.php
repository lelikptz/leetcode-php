<?php

declare(strict_types=1);

namespace tests\Problems\Easy\MaximumDepthOfBinaryTree;

use PHPUnit\Framework\TestCase;
use Problems\Easy\MaximumDepthOfBinaryTree\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode|null $root
     * @param int $expectedDepth
     * @return void
     */
    public function maxDepth(?TreeNode $root, int $expectedDepth): void
    {
        $solution = new Solution();

        $actualDepth = $solution->maxDepth($root);

        $this->assertEquals($expectedDepth, $actualDepth);
    }

    public function dataProvider(): array
    {
        return
            [
                [null, 0],
                [new TreeNode(1), 1],
                [new TreeNode(1, null, new TreeNode(2, new TreeNode(3, new TreeNode(4)), null)), 4],
                [
                    new TreeNode(1,
                        left: new TreeNode(2,
                            left: new TreeNode(4),
                            right: new TreeNode(5)
                        ),
                        right: new TreeNode(3,
                            left: new TreeNode(6),
                            right: new TreeNode(7)
                        ),
                    ), 3],
            ];
    }
}
