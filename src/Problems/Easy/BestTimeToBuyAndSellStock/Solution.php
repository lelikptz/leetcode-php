<?php

declare(strict_types=1);

namespace Problems\Easy\BestTimeToBuyAndSellStock;

final class Solution
{
    public function maxProfit($prices)
    {
        $min = $prices[0];
        $max = 0;
        for ($i = 1, $iMax = count($prices); $i < $iMax; $i++) {
            if ($min > $prices[$i]) {
                $min = $prices[$i];
            }

            $max = max($prices[$i] - $min, $max);
        }

        return $max;
    }
}
