<?php

declare(strict_types=1);

namespace Problems\Easy\ToeplitzMatrix;

final class Solution
{
    /**
     * @param array[][] $matrix
     * @return bool
     */
    public function isToeplitzMatrix(array $matrix): bool
    {
        foreach ($matrix as $row => $rowValue) {
            for ($column = 0, $columnMax = count($matrix[0]) - 1; $column < $columnMax; $column++) {
                if (isset($matrix[$row + 1][$column + 1]) && $rowValue[$column] !== $matrix[$row + 1][$column + 1]) {
                    return false;
                }
            }
        }

        return true;
    }
}
