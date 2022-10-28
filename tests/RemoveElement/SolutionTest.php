<?php

declare(strict_types=1);

namespace tests\RemoveElement;

use PHPUnit\Framework\TestCase;
use RemoveElement\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @test
     * @param array $nums
     * @param int $removeValue
     * @param array $expected
     * @param int $length
     * @return void
     */
    public function removeDuplicates(array $nums, int $removeValue, array $expected, int $length): void
    {
        $solution = new Solution();
        $actualCount = $solution->removeElement($nums, $removeValue);

        sort($nums);
        sort($expected);
        $this->assertEquals($nums, $expected);
        $this->assertSame($length, $actualCount);
    }

    public function dataProvider(): array
    {
        return
            [
                [
                    [3, 2, 2, 3],
                    3,
                    [2, 2],
                    2,
                ],
                [
                    [0, 1, 2, 2, 3, 0, 4, 2],
                    2,
                    [0, 1, 4, 0, 3],
                    5,
                ],
            ];
    }
}
