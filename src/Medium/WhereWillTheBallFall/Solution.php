<?php

declare(strict_types=1);

namespace Medium\WhereWillTheBallFall;

final class Solution
{
    /**
     * @param int[][] $grid
     * @return int[]
     */
    public function findBall(array $grid): array
    {
        $res = [];
        for ($i = 0, $iMax = count($grid[0]); $i < $iMax; $i++) {

            $start = $i;
            foreach ($grid as $row => $colItems) {
                if ($this->canLeft($grid, $row, $start)) {
                    $start--;
                } elseif ($this->canRight($grid, $row, $start)) {
                    $start++;
                } else {
                    $start = -1;
                    break;
                }
            }

            $res[$i] = $start;
        }

        return $res;
    }

    public function canRight(array $grid, int $row, int $column): bool
    {
        return isset($grid[$row][$column + 1]) && $grid[$row][$column] === 1 && $grid[$row][$column + 1] === 1;
    }

    public function canLeft(array $grid, int $row, int $column): bool
    {
        return isset($grid[$row][$column - 1]) && $grid[$row][$column] === -1 && $grid[$row][$column - 1] === -1;
    }
}
