<?php

declare(strict_types=1);

namespace Problems\Easy\PascalTriangle2;

final class Solution
{
    /**
     * @param int $rowIndex
     * @return int[]
     */
    public function getRow(int $rowIndex): array
    {
        if ($rowIndex === 0) {
            return [1];
        }
        if ($rowIndex === 1) {
            return [1, 1];
        }

        $prev = $this->getRow($rowIndex - 1);

        $next = [1];
        for ($i = 1, $iMax = count($prev); $i < $iMax; $i++) {
            $next[] = $prev[$i] + $prev[$i - 1];
        }
        $next[] = 1;

        return $next;
    }
}
