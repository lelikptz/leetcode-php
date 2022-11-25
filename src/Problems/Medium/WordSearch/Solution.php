<?php

declare(strict_types=1);

namespace Problems\Medium\WordSearch;

final class Solution
{
    /**
     * @var Char[]
     */
    private array $path = [];

    /**
     * @param string[][] $board
     * @param string $word
     * @return boolean
     */
    public function exist(array $board, string $word): bool
    {
        if (!$this->hasAllChar($board, $word)) {
            return false;
        }

        $stack = [];
        $cur = null;
        for ($i = 0, $iMax = strlen($word); $i < $iMax; $i++) {
            $chars = $this->findChars($board, $cur, $word[$i]);

            if (empty($chars) && empty($stack)) {
                return false;
            }

            foreach ($chars as $char) {
                $stack[] = [
                    $char,
                    $i,
                    $this->path,
                ];
            }

            [$cur, $i, $this->path] = array_pop($stack);
            $this->path[] = $cur;
        }

        return true;
    }

    /**
     * @param array $board
     * @param Char|null $cur
     * @param string $value
     * @return Char[]
     */
    private function findChars(array $board, ?Char $cur, string $value): array
    {
        $chars = [];
        foreach ($board as $y => $iValue) {
            foreach ($iValue as $x => $jValue) {
                if ($cur === null) {
                    if ($jValue === $value) {
                        $c = new Char($x, $y, $value);
                        $chars[] = $c;
                    }
                } else if (
                    $jValue === $value
                    &&
                    (($y === $cur->y && ($x === $cur->x - 1 || $x === $cur->x + 1)) || ($x === $cur->x && ($y === $cur->y - 1 || $y === $cur->y + 1)))
                ) {
                    $c = new Char($x, $y, $value);
                    if (!$this->inPath($c)) {
                        $chars[] = $c;
                    }
                }
            }
        }

        return $chars;
    }

    private function inPath(Char $char): bool
    {
        foreach ($this->path as $item) {
            if ($item->value === $char->value && $item->x === $char->x && $item->y === $char->y) {
                return true;
            }
        }

        return false;
    }

    private function hasAllChar(array $board, string $word): bool
    {
        $map = [];
        foreach ($board as $iValue) {
            foreach ($iValue as $jValue) {
                $map[$jValue] = true;
            }
        }

        for ($i = 0, $iMax = strlen($word); $i < $iMax; $i++) {
            if (!isset($map[$word[$i]])) {
                return false;
            }
        }

        return true;
    }
}
