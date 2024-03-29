<?php

declare(strict_types=1);

namespace tests\Problems\Easy\ToeplitzMatrix;

use PHPUnit\Framework\TestCase;
use Problems\Easy\ToeplitzMatrix\Solution;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $matrix
     * @param bool $expected
     * @return void
     */
    public function plusOne(array $matrix, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->isToeplitzMatrix($matrix);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            [[[1, 2, 3, 4], [5, 1, 2, 3], [9, 5, 1, 2]], true],
            [[[1, 2], [2, 2]], false],
        ];
    }
}
