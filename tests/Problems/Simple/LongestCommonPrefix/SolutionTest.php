<?php

declare(strict_types=1);

namespace tests\Problems\Simple\LongestCommonPrefix;

use PHPUnit\Framework\TestCase;
use Problems\Simple\LongestCommonPrefix\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $list
     * @param string $expected
     * @return void
     */
    public function longestCommonPrefix(array $list, string $expected): void
    {
        $solution = new Solution();

        $actual = $solution->longestCommonPrefix($list);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            [
                ['flower', 'flow', 'flight'],
                'fl'
            ],
            [
                ['dog', 'racecar', 'car'],
                ''
            ],
            [
                ['cir', 'car'],
                'c'
            ],
            [
                ['reflower', 'flow', 'flight'],
                ''
            ],
            [
                ['flower', 'flower', 'flower', 'flower'],
                'flower'
            ],
            [
                ['aa', 'aa'],
                'aa'
            ],
        ];
    }
}
