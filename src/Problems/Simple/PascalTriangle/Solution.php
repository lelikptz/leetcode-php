<?php

declare(strict_types=1);

namespace Problems\Simple\PascalTriangle;

final class Solution
{
    /**
     * @param int $numRows
     * @return int[][]
     */
    public function generate(int $numRows): array
    {
        $triangle = [];
        for ($i = 1; $i <= $numRows; $i++) {
            $row = [];
            for ($j = 1; $j <= $i; $j++) {
                if (isset($triangle[$i - 2][$j - 2], $triangle[$i - 2][$j - 1])) {
                    $row[] = $triangle[$i - 2][$j - 2] + $triangle[$i - 2][$j - 1];
                } else {
                    $row[] = 1;
                }
            }
            $triangle[] = $row;
        }

        return $triangle;
    }
}
