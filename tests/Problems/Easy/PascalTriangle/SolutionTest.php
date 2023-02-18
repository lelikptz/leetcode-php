<?php

declare(strict_types=1);

namespace tests\Problems\Easy\PascalTriangle;

use PHPUnit\Framework\TestCase;
use Problems\Easy\PascalTriangle\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $numRow
     * @param array $expected
     * @return void
     */
    public function minDepth(int $numRow, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->generate($numRow);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [5, [[1], [1, 1], [1, 2, 1], [1, 3, 3, 1], [1, 4, 6, 4, 1]]],
                [1, [[1]]],
            ];
    }
}
