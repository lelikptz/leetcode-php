<?php

declare(strict_types=1);

namespace Problems\Medium\OnlineStockSpan;

final class StockSpanner
{
    private array $stack = [];

    public function next(int $price): int
    {
        $span = $this->findSpan($price);
        $this->stack[] = [$price, $span];

        return $span;
    }

    private function findSpan(int $price): int
    {
        $span = 1;
        for ($i = count($this->stack) - 1; $i >= 0; $i--) {
            if ($this->stack[$i][0] <= $price) {
                $span += $this->stack[$i][1];
                $i -= $this->stack[$i][1] - 1;
            } else {
                break;
            }
        }

        return $span;
    }
}
