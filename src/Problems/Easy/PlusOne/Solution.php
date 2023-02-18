<?php

declare(strict_types=1);

namespace Problems\Easy\PlusOne;

final class Solution
{
    /**
     * @param int[] $digits
     * @return array
     */
    public function plusOne(array $digits): array
    {
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            if ($digits[$i] !== 9) {
                $digits[$i]++;

                return $digits;
            }
            $digits[$i] = 0;
        }

        return [1, ...$digits];
    }
}
