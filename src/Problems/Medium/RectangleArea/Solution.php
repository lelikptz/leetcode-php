<?php

declare(strict_types=1);

namespace Problems\Medium\RectangleArea;

final class Solution
{
    public function computeArea(int $ax1, int $ay1, int $ax2, int $ay2, int $bx1, int $by1, int $bx2, int $by2): int
    {
        $aArea = ($ax2 - $ax1) * ($ay2 - $ay1);
        $bArea = ($bx2 - $bx1) * ($by2 - $by1);

        return $aArea + $bArea - $this->calculateCommonArea($ax1, $ay1, $ax2, $ay2, $bx1, $by1, $bx2, $by2);
    }

    private function calculateCommonArea(int $ax1, int $ay1, int $ax2, int $ay2, int $bx1, int $by1, int $bx2, int $by2): int
    {
        $x1 = max($ax1, $bx1);
        $x2 = min($ax2, $bx2);
        $y1 = max($ay1, $by1);
        $y2 = min($ay2, $by2);

        $width = $x2 - $x1;
        $height = $y2 - $y1;
        if ($width < 0 || $height < 0) {
            return 0;
        }

        return $width * $height;
    }
}
