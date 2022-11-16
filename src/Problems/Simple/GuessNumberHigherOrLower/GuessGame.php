<?php

declare(strict_types=1);

namespace Problems\Simple\GuessNumberHigherOrLower;

class GuessGame
{
    public int $pick;

    public function __construct(int $pick)
    {
        $this->pick = $pick;
    }

    public function guess(int $num): int
    {
        return $this->pick <=> $num;
    }
}
