<?php

declare(strict_types=1);

namespace Problems\Easy\Maximum69Number;

final class Solution
{
    public function maximum69Number(int $num): int
    {
        $arr = [$num];
        $stringNum = (string)$num;
        for ($i = 0, $iMax = strlen($stringNum) - 1; $i <= $iMax; $i++) {
            if ($stringNum[$i] === '6') {
                $stringNum[$i] = '9';
                $arr[] = (int)$stringNum;
                $stringNum[$i] = '6';
            }
        }

        return max($arr);
    }
}
