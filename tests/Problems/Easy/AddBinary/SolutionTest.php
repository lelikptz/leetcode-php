<?php

declare(strict_types=1);

namespace tests\Problems\Easy\AddBinary;

use PHPUnit\Framework\TestCase;
use Problems\Easy\AddBinary\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s1
     * @param string $s2
     * @param string $expected
     * @return void
     */
    public function lengthOfLastWord(string $s1, string $s2, string $expected): void
    {
        $solution = new Solution();

        $actual = $solution->addBinary($s1, $s2);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                ['11', '1', '100'],
                ['1010', '1011', '10101'],
                ['10100000100100110110010000010101111011011001101110111111111101000000101111001110001111100001101', '110101001011101110001111100110001010100001101011101010000011011011001011101111001100000011011110011', '110111101100010011000101110110100000011101000101011001000011011000001100011110011010010011000000000'],
                ['1111', '1111', '11110'],
            ];
    }
}
