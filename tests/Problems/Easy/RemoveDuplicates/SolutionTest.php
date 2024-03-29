<?php

declare(strict_types=1);

namespace tests\Problems\Easy\RemoveDuplicates;

use PHPUnit\Framework\TestCase;
use Problems\Easy\RemoveDuplicates\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $nums
     * @param array $expected
     * @param int $length
     * @return void
     */
    public function removeDuplicates(array $nums, array $expected, int $length): void
    {
        $solution = new Solution();
        $actualCount = $solution->removeDuplicates($nums);

        $this->assertEquals($expected, $nums);
        $this->assertEquals($length, $actualCount);
    }

    public function dataProvider(): array
    {
        return
            [
                [
                    [1, 1, 2],
                    [1, 2],
                    2,
                ],
                [
                    [0, 0, 1, 1, 1, 2, 2, 3, 3, 4],
                    [0, 1, 2, 3, 4],
                    5,
                ],
            ];
    }
}
