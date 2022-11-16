<?php

declare(strict_types=1);

namespace Problems\Simple\GuessNumberHigherOrLower;

final class Solution extends GuessGame
{
    public function guessNumber(int $n): int
    {
        [$n, $min, $max] = $this->calculate($n, 1, 2 ** 31);
        while ($this->guess($n) !== 0) {
            [$n, $min, $max] = $this->calculate($n, $min, $max);
        }

        return $n;
    }

    private function calculate(int $n, int $min, int $max): array
    {
        if ($this->guess($n) > 0) {
            $min = $n;
        }

        if ($this->guess($n) < 0) {
            $max = $n;
        }

        return [(int)(($min + $max) / 2), $min, $max];
    }
}
