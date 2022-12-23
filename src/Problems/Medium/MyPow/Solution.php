<?php

declare(strict_types=1);

namespace Problems\Medium\MyPow;

final class Solution
{
    public function myPow(float $x, float $n): float
    {
        $x = $this->pow($x, abs($n));

        return $n > 0 ? $x : 1 / $x;
    }

    private function pow(float $x, float $n): float
    {
        if ($n === 0.0) {
            return 1;
        }

        if ($n === 1.0) {
            return $x;
        }

        if ($n % 2 === 0) {
            $n /= 2;

            $tmp = $this->pow($x, $n);
            return $tmp * $tmp;
        }

        --$n;
        $n /= 2;
        $tmp = $this->pow($x, $n);

        return $x * $tmp * $tmp;
    }
}
