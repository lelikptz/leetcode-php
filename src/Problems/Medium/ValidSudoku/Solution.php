<?php

declare(strict_types=1);

namespace Problems\Medium\ValidSudoku;

final class Solution
{
    /**
     * @param string[][] $board
     * @return Boolean
     */
    public function isValidSudoku(array $board): bool
    {
        $cubes = [];
        for ($i = 0; $i < 9; $i++) {
            $row = $board[$i];
            if (!$this->isValidSymbols($row)) {
                return false;
            }

            $column = [];
            for ($j = 0; $j < 9; $j++) {
                $column[] = $board[$j][$i];

                $x = intdiv($i, 3) + intdiv($j, 3) * 3;
                $cubes[$x][] = $board[$i][$j];
            }
            if (!$this->isValidSymbols($column)) {
                return false;
            }
        }

        foreach ($cubes as $cube) {
            if (!$this->isValidSymbols($cube)) {
                return false;
            }
        }

        return true;
    }

    private function isValidSymbols(array $array): bool
    {
        $valid = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0];
        foreach ($array as $item) {
            if ($item !== '.') {
                $valid[$item]++;
            }
        }

        return max($valid) <= 1;
    }
}
