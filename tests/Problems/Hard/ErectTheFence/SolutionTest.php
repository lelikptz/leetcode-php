<?php

namespace tests\Problems\Hard\ErectTheFence;

use PHPUnit\Framework\TestCase;
use Problems\Hard\ErectTheFence\Jarvis;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $trees
     * @param array $expected
     * @return void
     */
    public function outerTrees(array $trees, array $expected): void
    {
        $solution = new Jarvis();

        $actual = $solution->outerTrees($trees);

        $this->assertCount(count($expected), $actual);

        foreach ($expected as $item) {
            $this->assertContains($item, $actual);
        }
    }

    public function dataProvider(): array
    {
        return
            [
                [[[1, 1], [2, 2], [2, 0], [2, 4], [3, 3], [4, 2]], [[1, 1], [2, 0], [3, 3], [2, 4], [4, 2]]],
                [[[1, 2], [2, 2], [4, 2]], [[4, 2], [2, 2], [1, 2]]],
                [[[0, 2], [1, 1], [2, 2], [2, 4], [4, 2], [3, 3]], [[0, 2], [4, 2], [3, 3], [1, 1], [2, 4]]],
                [[[0, 2], [1, 1], [2, 2], [2, 4], [4, 2], [3, 3]], [[0, 2], [4, 2], [3, 3], [1, 1], [2, 4]]],
                [[[1, 2], [2, 2], [4, 2], [5, 2], [6, 2], [7, 2]], [[4, 2], [6, 2], [2, 2], [5, 2], [1, 2], [7, 2]]],
            ];
    }
}
