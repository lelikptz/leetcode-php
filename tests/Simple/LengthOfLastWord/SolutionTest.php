<?php

namespace tests\Simple\LengthOfLastWord;

use PHPUnit\Framework\TestCase;
use Simple\LengthOfLastWord\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s
     * @param int $expected
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