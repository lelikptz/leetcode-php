<?php

declare(strict_types=1);

namespace Problems\Simple\BestTimeToBuyAndSellStock;

final class Solution
{
    /**
     * @param int[] $prices
     * @return int
     */
    public function maxProfit(array $prices): int
    {
        $array = [];
        foreach ($prices as $key => $item) {
            if (!isset($prices[$key - 1], $prices[$key + 1])
                ||
                (
                    !($item <= $prices[$key - 1] && $item >= $prices[$key + 1])
                    &&
                    !($item > $prices[$key - 1] && $item < $prices[$key + 1])
                )
            ) {
                $array[] = $item;
            }
        }

        return $this->max($array, 0);
    }

    public function max(array $prices, int $index): int
    {
        if ($index >= count($prices)) {
            return 0;
        }

        $max = 0;
        $maxIndex = $index;
        $min = $prices[$index];
        for ($i = $index, $iMax = count($prices); $i < $iMax; $i++) {
            if ($prices[$i] > $max) {
                $max = $prices[$i];
                $maxIndex = $i;
            }
        }

        for ($i = $index, $iMax = $maxIndex; $i < $iMax; $i++) {
            if ($prices[$i] < $min) {
                $min = $prices[$i];
            }
        }

        if ($maxIndex === $index) {
            $maxIndex = ++$index;
        }

        return max([$max - $min, $this->max($prices, $maxIndex)]);
    }
}
