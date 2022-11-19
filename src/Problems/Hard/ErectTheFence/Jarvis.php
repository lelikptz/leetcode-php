<?php

declare(strict_types=1);

namespace Problems\Hard\ErectTheFence;

final class Jarvis
{
    /**
     * @param int[][] $trees
     * @return int[][]
     */
    public function outerTrees(array $trees): array
    {
        if (count($trees) <= 3) {
            return $trees;
        }
        $result = [];
        $leftMost = $this->getMostLeftIndex($trees);

        $p = $leftMost;
        do {
            $q = ($p + 1) % count($trees);
            foreach ($trees as $i => $iValue) {
                if ($this->orientation($trees[$p], $iValue, $trees[$q]) < 0) {
                    $q = $i;
                }
            }

            foreach ($trees as $i => $iValue) {
                if ($i !== $p && $i !== $q && $this->orientation($trees[$p], $iValue, $trees[$q]) === 0 && $this->inBetween($trees[$p], $iValue, $trees[$q])) {
                    $this->addUnique($result, $iValue);
                }
            }

            $this->addUnique($result, $trees[$q]);
            $p = $q;
        } while ($p !== $leftMost);

        return $result;
    }

    public function orientation(array $a, array $b, array $c): int
    {
        return ($b[0] - $a[0]) * ($c[1] - $b[1]) - ($b[1] - $a[1]) * ($c[0] - $b[0]);
    }

    private function inBetween(array $p, array $i, array $q): bool
    {
        $a = ($i[0] >= $p[0] && $i[0] <= $q[0]) || ($i[0] <= $p[0] && $i[0] >= $q[0]);
        $b = ($i[1] >= $p[1] && $i[1] <= $q[1]) || ($i[1] <= $p[1] && $i[1] >= $q[1]);

        return $a && $b;
    }

    private function getMostLeftIndex(array $trees): int
    {
        $leftMost = 0;
        foreach ($trees as $i => $iValue) {
            if ($iValue[0] < $trees[$leftMost][0]) {
                $leftMost = $i;
            }
        }

        return $leftMost;
    }

    private function addUnique(array &$result, array $element): void
    {
        if (in_array($element, $result, true)) {
            return;
        }

        $result[] = $element;
    }
}
