<?php

declare(strict_types=1);

namespace Problems\Medium\FlipStringMonotoneIncreasing;

final class Solution
{
    public function minFlipsMonoIncr(string $s)
    {
        $zero = 0;
        $one = 0;
        $j = 0;
        $len = strlen($s);

        while ($s[$j] === '0' && $j < $len) {
            $j++;
        }

        for ($i = $j; $i < $len; $i++) {
            if ($s[$i] === '0') {
                $zero++;
            } else {
                $one++;
            }

            if ($zero > $one) {
                $zero = $one;
            }
        }

        return min($zero, $one);
    }
}
