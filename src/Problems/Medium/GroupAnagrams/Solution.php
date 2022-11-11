<?php

declare(strict_types=1);

namespace Problems\Medium\GroupAnagrams;

final class Solution
{
    /**
     * @param string[] $strings
     * @return string[][]
     */
    public function groupAnagrams(array $strings): array
    {
        $map = [];
        foreach ($strings as $string) {
            $arr = str_split($string);
            sort($arr);
            $key = implode($arr);
            $map[$key][] = $string;
        }

        $result = [];
        foreach ($map as $item) {
            $result[] = $item;
        }

        return $result;
    }
}
