<?php

namespace tests\Simple\ClimbingStairs;

use PHPUnit\Framework\TestCase;
use Simple\ClimbingStairs\Solution;

class SolutionTest extends TestCase
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
