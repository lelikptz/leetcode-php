<?php

declare(strict_types=1);

namespace Problems\Hard\ErectTheFence;

final class MonotoneChain
{
    /**
     * @param int[][] $trees
     * @return int[][]
     */
    public function outerTrees(array $trees): array
    {
        usort($trees, static function (array $p, array $q) {
            return $q[0] - $p[0] === 0 ? ($p[1] - $q[1]) : ($p[0] - $q[0]);
        });

        $stack = [];
        foreach ($trees as $iValue) {
            while (count($stack) >= 2 && $this->orientation($stack[count($stack) - 2], $stack[count($stack) - 1], $iValue) > 0) {
                array_pop($stack);
            }
            $stack[] = $iValue;
        }
        array_pop($stack);

        for ($i = count($trees) - 1; $i >= 0; $i--) {
            while (count($stack) >= 2 && $this->orientation($stack[count($stack) - 2], $stack[count($stack) - 1], $trees[$i]) > 0) {
                array_pop($stack);
            }
            $stack[] = $trees[$i];
        }

        return $this->toUniqueArray($stack);
    }

    private function orientation(array $p, array $q, array $r): int
    {
        return ($q[1] - $p[1]) * ($r[0] - $q[0]) - ($q[0] - $p[0]) * ($r[1] - $q[1]);
    }

    private function toUniqueArray(array $stack): array
    {
        $array = [];

        foreach ($stack as $item) {
            if (!in_array($item, $array, true)) {
                $array[] = $item;
            }
        }

        return $array;
    }
}
