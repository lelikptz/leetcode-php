<?php

namespace tests\Problems\Medium\SumOfSubarrayMinimums;

use Problems\Medium\SumOfSubarrayMinimums\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int[] $arr
     * @param int $expected
     * @return void
     */
    public function sumSubarrayMins(array $arr, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->sumSubarrayMins($arr);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [[3, 1, 2, 4], 17],
                [[11, 81, 94, 43, 3], 444],
                [[71, 55, 82, 55], 593],
                [[85], 85],
            ];
    }
}
