<?php

declare(strict_types=1);

namespace tests\Problems\Simple\PascalTriangle2;

use Problems\Simple\PascalTriangle2\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $rowIndex
     * @param array $expected
     * @return void
     */
    public function getRow(int $rowIndex, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->getRow($rowIndex);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [3, [1, 3, 3, 1]],
                [0, [1]],
                [1, [1, 1]],
            ];
    }
}
