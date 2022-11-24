<?php

declare(strict_types=1);

namespace Problems\Medium\WordSearch;

final class Char
{
    public function __construct(
        public readonly int    $x,
        public readonly int    $y,
        public readonly string $value,
    )
    {
    }
}
