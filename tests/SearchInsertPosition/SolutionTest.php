<?php

namespace tests\SearchInsertPosition;

use SearchInsertPosition\Solution;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @test
     * @param array $nums
     * @param int $target
     * @param int $expected
     * @return void
     */
    public function searchInsert(array $nums, int $target, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->searchInsert($nums, $target);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [
                    [1, 3, 5, 6],
                    5,
                    2
                ],
                [
                    [1, 3, 5, 6],
                    2,
                    1
                ],
                [
                    [1, 3, 5, 6],
                    7,
                    4
                ],
            ];
    }
}
