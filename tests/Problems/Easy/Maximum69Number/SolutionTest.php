<?php

declare(strict_types=1);

namespace tests\Problems\Easy\Maximum69Number;

use PHPUnit\Framework\TestCase;
use Problems\Easy\Maximum69Number\Solution;

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
