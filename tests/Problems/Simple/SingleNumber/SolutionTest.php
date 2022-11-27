<?php

namespace tests\Problems\Simple\SingleNumber;

use Problems\Simple\SingleNumber\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $numbers
     * @param int $expected
     * @return void
     */
    public function singleNumber(array $numbers, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->singleNumber($numbers);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [[2, 2, 1], 1],
                [[4, 1, 2, 1, 2], 4],
                [[1], 1],
            ];
    }
}
