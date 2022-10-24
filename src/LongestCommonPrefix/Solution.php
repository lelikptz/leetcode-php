<?php

declare(strict_types=1);

namespace LongestCommonPrefix;

final class Solution
{
    /**
     * @param string[] $list
     * @return string
     */
    public function longestCommonPrefix(array $list): string
    {
        $result = "";
        $count = 1;
        for ($i = 0, $iMax = count($list); $i < $iMax;) {
            if ($count > strlen($list[$i])) {
                $i++;
                continue;
            }
            $str = substr($list[$i], 0, $count);
            $checkArray = $list;
            unset($checkArray[$i]);
            if ($this->check($str, $checkArray)) {
                if (strlen($str) > strlen($result)) {
                    $result = $str;
                }
                $count++;
            } else {
                $count = 1;
                $i++;
            }
        }

        return $result;
    }

    private function check(string $prefix, array $list): bool
    {
        $right = 0;
        foreach ($list as $item) {
            if (0 === stripos($item, $prefix)) {
                $right++;
            }
        }

        return $right === count($list);
    }
}
