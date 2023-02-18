<?php

declare(strict_types=1);

namespace tests\Problems\Easy\UglyNumber;

use PHPUnit\Framework\TestCase;
use Problems\Easy\UglyNumber\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $num
     * @param bool $expected
     * @return void
     */
    public function plusOne(int $num, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->isUgly($num);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            [6, true],
            [1, true],
            [14, false],
            [8, true],
        ];
    }
}
