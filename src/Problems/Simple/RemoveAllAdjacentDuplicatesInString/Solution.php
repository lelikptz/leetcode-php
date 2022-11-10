<?php

declare(strict_types=1);

namespace Problems\Simple\RemoveAllAdjacentDuplicatesInString;

final class Solution
{
    public function removeDuplicates(string $s): string
    {
        for ($i = 1, $iMax = strlen($s); $i < $iMax; $i++) {
            if ($s[$i] === $s[$i - 1]) {
                $search = $this->getCharsForReplace($s, $i, $i - 1);
                $s = str_replace($search, '', $s);
                $i = 0;
                $iMax = strlen($s);
            }
        }

        return $s;
    }

    private function getCharsForReplace(string $s, int $i, int $j): string
    {
        $result = $s[$i] . $s[$j];
        $i++;
        $j--;
        while ($j >= 0 && $i < strlen($s) && $s[$i] === $s[$j]) {
            $result = $s[$i] . $result . $s[$j];
            $i++;
            $j--;
        }

        return $result;
    }
}
