<?php

declare(strict_types=1);

namespace Problems\Easy\MakeTheStringGreat;

final class Solution
{
    public function makeGood(string $s): string
    {
        $badCharacters = $this->getBadCharacters($s);
        while ($badCharacters) {
            $s = str_replace($badCharacters, '', $s);
            $badCharacters = $this->getBadCharacters($s);
        }

        return $s;
    }

    private function getBadCharacters(string $s): string
    {
        for ($i = 0, $iMax = strlen($s); $i < $iMax; $i++) {
            if (
                isset($s[$i + 1])
                &&
                (
                    ($s[$i] === strtolower($s[$i + 1]) && $s[$i + 1] === strtoupper($s[$i + 1]))
                    ||
                    (strtolower($s[$i]) === $s[$i + 1] && $s[$i] === strtoupper($s[$i]))
                )
            ) {
                return $s[$i] . $s[$i + 1];
            }
        }

        return '';
    }
}
