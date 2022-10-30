<?php

declare(strict_types=1);

namespace LengthOfLastWord;

final class Solution
{
    /**
     * @param string $s
     * @return int
     */
    public function lengthOfLastWord(string $s): int
    {
        $arr = explode(' ', trim($s));

        return strlen($arr[count($arr) - 1]);
    }
}
