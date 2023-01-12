<?php

declare(strict_types=1);

namespace Problems\Medium\LengthOfLongestSubstring;

final class Solution
{
    public function lengthOfLongestSubstring(string $s): int
    {
        $max = 0;
        $map = [];
        $list = [];
        for ($i = 0, $iMax = strlen($s); $i < $iMax; $i++) {
            if (isset($map[$s[$i]])) {
                $list = array_splice($list, array_search($s[$i], $list, true) + 1, count($list));
                $map = array_flip($list);
            }
            $map[$s[$i]] = true;
            $list[] = $s[$i];
            if (count($list) > $max) {
                $max = count($list);
            }
        }

        return $max;
    }
}
