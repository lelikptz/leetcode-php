<?php

declare(strict_types=1);

namespace Problems\Easy\LengthOfLastWord;

final class Solution
{
    public function lengthOfLastWord(string $s): int
    {
        $arr = explode(' ', trim($s));

        return strlen($arr[count($arr) - 1]);
    }
}
