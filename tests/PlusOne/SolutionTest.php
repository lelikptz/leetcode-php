<?php

declare(strict_types=1);

namespace tests\PlusOne;

use PHPUnit\Framework\TestCase;
use PlusOne\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $digits
     * @param array $expected
     * @return void
     */
    public function plusOne(array $digits, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->plusOne($digits);

        $this->assertEquals($expected, $actual);
    }

    private function dataProvider(): array
    {
        return
            [
                [
                    [1, 2, 3], [1, 2, 4]
                ],
                [
                    [4, 3, 2, 1], [4, 3, 2, 2]
                ],
                [
                    [9], [1, 0]
                ],
                [
                    [7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 6],
                    [7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 7]
                ],
            ];
    }
}
