<?php

namespace tests\Simple\Maximum69Number;

use Simple\Maximum69Number\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $number
     * @param int $expected
     * @return void
     */
    public function maximum69Number(int $number, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->maximum69Number($number);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            [9669, 9969],
            [9996, 9999],
            [9999, 9999],
        ];
    }
}
