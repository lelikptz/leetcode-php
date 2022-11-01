<?php

declare(strict_types=1);

namespace tests\Simple\SqrtX;

use PHPUnit\Framework\TestCase;
use Simple\SqrtX\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $x
     * @param int $expected
     * @return void
     */
    public function plusOne(int $x, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->mySqrt($x);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            [4, 2],
            [8, 2],
        ];
    }
}
