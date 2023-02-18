<?php

declare(strict_types=1);

namespace tests\Problems\Simple\InvertBinaryTree;

use PHPUnit\Framework\TestCase;
use Problems\Simple\InvertBinaryTree\Solution;
use Structure\TreeNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param TreeNode|null $root
     * @param TreeNode|null $expected
     * @return void
     */
    public function invertTree(?TreeNode $root, ?TreeNode $expected): void
    {
        $solution = new Solution();

        $actual = $solution->invertTree($root);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                'null' => [null, null],
                [new TreeNode(), new TreeNode()],
                [new TreeNode(1), new TreeNode(1)],
                [
                    new TreeNode(
                        1,
                        new TreeNode(2),
                        new TreeNode(3),
                    ),
                    new TreeNode(
                        1,
                        new TreeNode(3),
                        new TreeNode(2),
                    )
                ],
                [
                    new TreeNode(
                        1,
                        new TreeNode(
                            2,
                            new TreeNode(4),
                            new TreeNode(5),
                        ),
                        new TreeNode(
                            3,
                            new TreeNode(6),
                            new TreeNode(7),
                        ),
                    ),
                    new TreeNode(
                        1,
                        new TreeNode(
                            3,
                            new TreeNode(7),
                            new TreeNode(6),
                        ),
                        new TreeNode(
                            2,
                            new TreeNode(5),
                            new TreeNode(4),
                        ),
                    ),
                ],
            ];
    }
}
