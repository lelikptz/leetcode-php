<?php

declare(strict_types=1);

namespace tests\Problems\Medium\OnlineStockSpan;

use PHPUnit\Framework\TestCase;
use Problems\Medium\OnlineStockSpan\StockSpanner;

final class StockSpannerTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $values
     * @return void
     */
    public function next(array $values): void
    {
        $stockSpanner = new StockSpanner();

        foreach ($values as $item) {
            $this->assertEquals($item[1], $stockSpanner->next($item[0]));
        }
    }

    public function dataProvider(): array
    {
        return [
            [[[100, 1], [80, 1], [60, 1], [70, 2], [60, 1], [75, 4], [85, 6]]],
            [[[29, 1], [91, 2], [62, 1], [76, 2], [51, 1]]],
        ];
    }
}
