<?php

declare(strict_types=1);

namespace tests\Problems\Medium\RectangleArea;

use PHPUnit\Framework\TestCase;
use Problems\Medium\RectangleArea\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $values
     * @param int $expected
     * @return void
     */
    public function next(array $values, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->computeArea(...$values);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return [
            [[-3, 0, 3, 4, 0, -1, 9, 2], 45],
            [[-2, -2, 2, 2, -2, -2, 2, 2], 16],
            [[-2, -2, 2, 2, 3, 3, 4, 4], 17],
        ];
    }
}
