<?php

declare(strict_types=1);

namespace tests\Problems\Easy\GuessNumberHigherOrLower;

use Exception;
use PHPUnit\Framework\TestCase;
use Problems\Easy\GuessNumberHigherOrLower\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param Solution $solution
     * @param int $expected
     * @return void
     * @throws Exception
     */
    public function guessNumber(Solution $solution, int $expected): void
    {
        $actual = $solution->guessNumber(random_int(1, 2 ** 31));

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [new Solution(1), 1],
                [new Solution(2022), 2022],
                [new Solution(2 ** 31 - 1), 2 ** 31 - 1],
                [new Solution(10241024), 10241024],
            ];
    }
}
