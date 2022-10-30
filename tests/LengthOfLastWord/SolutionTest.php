<?php

namespace tests\LengthOfLastWord;

use LengthOfLastWord\Solution;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /**
     * @param string $s
     * @param int $expected
     * @dataProvider dataProvider
     * @test
     * @return void
     */
    public function lengthOfLastWord(string $s, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->lengthOfLastWord($s);

        $this->assertEquals($actual, $expected);
    }

    public function dataProvider(): array
    {
        return
            [
                ['Hello World', 5],
                ['   fly me   to   the moon  ', 4],
                ['luffy is still joyboy', 6],
            ];
    }

}
