<?php

declare(strict_types=1);

namespace AddBinary;

final class Solution
{
    public function addBinary(string $a, string $b): string
    {
        $long = strlen($a) > strlen($b) ? $a : $b;
        $short = strlen($a) <= strlen($b) ? $a : $b;

        $carry = 0;
        for ($i = 0, $iMax = strlen($long); $i < $iMax; $i++) {
            $aa = $long[strlen($long) - 1 - $i];
            if (strlen($short) - 1 - $i >= 0) {
                $bb = $short[strlen($short) - 1 - $i] ?? 0;
            } else {
                $bb = 0;
            }
            $cc = (int)$aa + (int)$bb + $carry;
            if ($cc >= 2) {
                $cc -= 2;
                $carry = 1;
            } else {
                $carry = 0;
            }
            $long[strlen($long) - 1 - $i] = $cc;
        }
        if ($carry !== 0) {
            return $carry . $long;
        }

        return $long;
    }
}
