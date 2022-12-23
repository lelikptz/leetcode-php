<?php

namespace tests\Problems\Medium\MyPow;

use Problems\Medium\MyPow\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     */
    public function myPow(float $x, float $n, float $expected): void
    {
        $solution = new Solution();

        $actual = $solution->myPow($x, $n);

        $this->assertEqualsWithDelta($expected, $actual, 0.0001);
    }

    public function dataProvider(): array
    {
        return
            [
                [2, 10, 1024],
                [2.1, 3, 9.261],
                [2, -2, 0.25],
            ];
    }
}
