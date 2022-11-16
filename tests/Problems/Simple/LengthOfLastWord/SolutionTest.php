<?php

declare(strict_types=1);

namespace tests\Problems\Simple\LengthOfLastWord;

use PHPUnit\Framework\TestCase;
use Problems\Simple\LengthOfLastWord\Solution;

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

        $this->assertEquals($expected, $actual);
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
