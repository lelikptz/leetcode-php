<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Problems\Medium\PerfectSquares\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $n
     * @param int $expected
     * @return void
     */
    public function numSquares(int $n, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->numSquares($n);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [12, 3],
                [13, 2],
                [43, 3],
            ];
    }
}
