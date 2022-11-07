<?php

declare(strict_types=1);

namespace Simple\Maximum69Number;

final class Solution
{
    public function maximum69Number(int $num): int
    {
        $arr = [$num];
        $num = (string)$num;
        for ($i = 0, $iMax = strlen($num) - 1; $i <= $iMax; $i++) {
            if ($num[$i] === '6') {
                $num[$i] = '9';
                $arr[] = (int)$num;
                $num[$i] = '6';
            }
        }

        return max($arr);
    }
}
