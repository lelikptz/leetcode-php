<?php

declare(strict_types=1);

namespace tests\Problems\Medium\FlipStringMonotoneIncreasing;

use PHPUnit\Framework\TestCase;
use Problems\Medium\FlipStringMonotoneIncreasing\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s
     * @param int $expected
     * @return void
     */
    public function minFlipsMonoIncr(string $s, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->minFlipsMonoIncr($s);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            ['00110', 1],
            ['010110', 2],
            ['00011000', 2],
        ];
    }
}
