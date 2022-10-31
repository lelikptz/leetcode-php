<?php

namespace tests\ClimbingStairs;

use ClimbingStairs\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @param int $n
     * @param int $expected
     * @return void
     * @dataProvider dataProvider
     * @test
     */
    public function climbStairs(int $n, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->climbStairs($n);

        $this->assertEquals($actual, $expected);
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
