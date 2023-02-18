<?php

namespace tests\Problems\Easy\BestTimeToBuyAndSellStock;

use Problems\Easy\BestTimeToBuyAndSellStock\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $prices
     * @param int $expected
     * @return void
     */
    public function maxProfit(array $prices, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->maxProfit($prices);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [[7, 1, 5, 3, 6, 4], 5],
                [[7, 6, 4, 3, 1], 0],
                [[2, 4, 1], 2],
                [[3, 2, 6, 5, 0, 3], 4]
            ];
    }
}
