<?php

declare(strict_types=1);

namespace tests\Problems\Medium\WhereWillTheBallFall;

use PHPUnit\Framework\TestCase;
use Problems\Medium\WhereWillTheBallFall\Solution;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $grid
     * @param array $expected
     * @return void
     */
    public function findBall(array $grid, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->findBall($grid);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [[[1, 1, 1, -1, -1], [1, 1, 1, -1, -1], [-1, -1, -1, 1, 1], [1, 1, 1, 1, -1], [-1, -1, -1, -1, -1]], [1, -1, -1, -1, -1]],
                [[[-1]], [-1]],
                [[[1, 1, 1, 1, 1, 1], [-1, -1, -1, -1, -1, -1], [1, 1, 1, 1, 1, 1], [-1, -1, -1, -1, -1, -1]], [0, 1, 2, 3, 4, -1]],
            ];
    }
}
