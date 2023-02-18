<?php

declare(strict_types=1);

namespace tests\Problems\Easy\BinaryTreePostorderTraversal;

use PHPUnit\Framework\TestCase;
use Problems\Easy\BinaryTreePostorderTraversal\Solution;
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
    public function postorderTraversal(?TreeNode $root, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->postorderTraversal($root);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [null, []],
                [new TreeNode(1), [1]],
                [new TreeNode(1, null, new TreeNode(2, new TreeNode(3), null)), [3, 2, 1]],
            ];
    }
}
