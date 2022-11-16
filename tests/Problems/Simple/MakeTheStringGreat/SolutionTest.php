<?php

declare(strict_types=1);

namespace tests\Problems\Simple\MakeTheStringGreat;

use PHPUnit\Framework\TestCase;
use Problems\Simple\MakeTheStringGreat\Solution;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s
     * @param string $expected
     * @return void
     */
    public function makeGood(string $s, string $expected): void
    {
        $solution = new Solution();

        $actual = $solution->makeGood($s);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            ['leEeetcode', 'leetcode'],
            ['abBAcC', ''],
            ['s', 's'],
            ['Pp', ''],
        ];
    }
}
