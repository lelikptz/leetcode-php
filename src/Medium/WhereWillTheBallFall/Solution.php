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
        for ($i = 0; $i < count($grid[0]); $i++) {

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

    function canRight(array $grid, int $row, int $column): bool
    {
        if (isset($grid[$row][$column + 1]) && $grid[$row][$column] === 1 && $grid[$row][$column + 1] === 1) {
            return true;
        }

        return false;
    }

    function canLeft(array $grid, int $row, int $column): bool
    {
        if (isset($grid[$row][$column - 1]) && $grid[$row][$column] === -1 && $grid[$row][$column - 1] === -1) {
            return true;
        }

        return false;
    }
}
