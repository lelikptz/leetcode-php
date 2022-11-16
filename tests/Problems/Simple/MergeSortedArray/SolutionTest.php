<?php

declare(strict_types=1);

namespace tests\Problems\Simple\MergeSortedArray;

use Problems\Simple\MergeSortedArray\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $nums1
     * @param int $m
     * @param array $nums2
     * @param int $n
     * @param array $expected
     * @return void
     */
    public function merge(array $nums1, int $m, array $nums2, int $n, array $expected): void
    {
        $solution = new Solution();

        $solution->merge($nums1, $m, $nums2, $n);

        $this->assertEquals($nums1, $expected);
    }

    public function dataProvider(): array
    {
        return
            [
                [[1, 2, 3, 0, 0, 0], 3, [2, 5, 6], 3, [1, 2, 2, 3, 5, 6]],
                [[1], 1, [], 0, [1]],
                [[0], 0, [1], 1, [1]],
            ];
    }
}
