<?php

declare(strict_types=1);

namespace tests\Problems\Medium\LengthOfLongestSubstring;

use PHPUnit\Framework\TestCase;
use Problems\Medium\LengthOfLongestSubstring\Solution;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s
     * @param int $expected
     * @return void
     */
    public function lengthOfLongestSubstring(string $s, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->lengthOfLongestSubstring($s);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                ['abcabcbb', 3],
                ['bbbbb', 1],
                ['pwwkew', 3],
            ];
    }
}
