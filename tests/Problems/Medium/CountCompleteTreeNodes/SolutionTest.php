<?php

declare(strict_types=1);

namespace tests\Problems\Medium\CountCompleteTreeNodes;

use PHPUnit\Framework\TestCase;
use Problems\Medium\CountCompleteTreeNodes\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode|null $node
     * @param int $excepted
     * @return void
     */
    public function countNodes(?TreeNode $node, int $excepted): void
    {
        $solution = new Solution();

        $actual = $solution->countNodes($node);

        $this->assertEquals($excepted, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [null, 0],
                [new TreeNode(1), 1],
                [new TreeNode(1, new TreeNode(2), new TreeNode(3, new TreeNode(4), new TreeNode(5))), 5],
            ];
    }
}
