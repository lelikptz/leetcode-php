<?php

declare(strict_types=1);

namespace Problems\Medium\LongestPalindromicSubstring;

final class Solution
{
    public function longestPalindrome(string $s): string
    {
        if (strlen($s) < 2) {
            return $s;
        }

        $palindrome = $s[0];
        for ($i = 0, $iMax = strlen($s); $i < $iMax; $i++) {
            for ($j = $iMax - 1; $j > $i; $j--) {
                $cur = substr($s, $i, $j - $i + 1);
                if (strlen($cur) <= strlen($palindrome)) {
                    break;
                }

                if ($this->isPalindrome($cur)) {
                    $palindrome = $cur;
                }
            }
        }

        return $palindrome;
    }

    private function isPalindrome(string $cur): bool
    {
        for ($i = 0; $i < strlen($cur) / 2; $i++) {
            if ($cur[$i] !== $cur[strlen($cur) - 1 - $i]) {
                return false;
            }
        }

        return true;
    }
}
