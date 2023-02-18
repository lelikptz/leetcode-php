<?php

declare(strict_types=1);

namespace tests\Problems\Easy\ClimbingStairs;

use PHPUnit\Framework\TestCase;
use Problems\Easy\ClimbingStairs\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $n
     * @param int $expected
     * @return void
     */
    public function climbStairs(int $n, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->climbStairs($n);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [2, 2],
                [3, 3],
                [38, 63245986],
            ];
    }
}
