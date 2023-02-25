<?php

declare(strict_types=1);

namespace tests\Problems\Medium\LongestPalindromicSubstring;

use PHPUnit\Framework\TestCase;
use Problems\Medium\LongestPalindromicSubstring\Solution;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s
     * @param string $expected
     * @return void
     */
    public function lengthOfLongestSubstring(string $s, string $expected): void
    {
        $solution = new Solution();

        $actual = $solution->longestPalindrome($s);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                ['', ''],
                ['a', 'a'],
                ['ab', 'a'],
                ['aa', 'aa'],
                ['cbbd', 'bb'],
                ['abcba', 'abcba'],
                ['zabcdcb', 'bcdcb'],
                ['bcdcbza', 'bcdcb'],
                ['bcdcbzaba', 'bcdcb'],
                ['brcccccbran', 'ccccc'],
                ['abaffggffhah', 'ffggff'],
                ['abcdbbfcba', 'bb'],
            ];
    }
}
