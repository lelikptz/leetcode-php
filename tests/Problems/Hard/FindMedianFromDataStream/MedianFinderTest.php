<?php

declare(strict_types=1);

namespace tests\Problems\Hard\FindMedianFromDataStream;

use PHPUnit\Framework\TestCase;
use Problems\Hard\FindMedianFromDataStream\MedianFinder;

final class MedianFinderTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $nums
     * @param float $expected
     * @return void
     */
    public function medianFinder(array $nums, float $expected): void
    {
        $medianFinder = new MedianFinder();
        foreach ($nums as $value) {
            $medianFinder->addNum($value);
        }

        $this->assertEquals(
            $expected,
            $medianFinder->findMedian(),
        );
    }

    public function dataProvider(): array
    {
        return
            [
                [[1, 2], 1.5],
                [[1, 2, 3], 2],
                [[6, 10, 2, 6, 5, 0], 5.5],
                [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 5.5],
            ];
    }
}
