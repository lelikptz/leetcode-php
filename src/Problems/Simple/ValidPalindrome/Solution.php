<?php

declare(strict_types=1);

namespace Problems\Simple\ValidPalindrome;

final class Solution
{
    /**
     * @param string $s
     * @return bool
     */
    public function isPalindrome(string $s): bool
    {
        $s = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '', $s));

        $len = strlen($s);
        for ($i = 0, $iMax = floor($len / 2); $i < $iMax; $i++) {
            if ($s[$i] !== $s[$len - $i - 1]) {
                return false;
            }
        }

        return true;
    }
}
