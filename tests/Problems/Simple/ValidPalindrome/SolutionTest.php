<?php

declare(strict_types=1);

namespace tests\Problems\Simple\ValidPalindrome;

use Problems\Simple\ValidPalindrome\Solution;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s
     * @param bool $expected
     * @return void
     */
    public function isPalindrome(string $s, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->isPalindrome($s);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                ['A man, a plan, a canal: Panama', true],
                ['race a car', false],
                [' ', true],
            ];
    }
}
