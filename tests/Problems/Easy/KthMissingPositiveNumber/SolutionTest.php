<?php

declare(strict_types=1);

namespace tests\Problems\Easy\KthMissingPositiveNumber;

use Problems\Easy\KthMissingPositiveNumber\Solution;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $arr
     * @param int $k
     * @param int $expected
     * @return void
     */
    public function findKthPositive(array $arr, int $k, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->findKthPositive($arr, $k);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [[2, 3, 4, 7, 11], 5, 9],
                [[1, 2, 3, 4], 2, 6],
            ];
    }
}
