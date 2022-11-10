<?php

declare(strict_types=1);

namespace tests\Problems\Simple\RemoveAllAdjacentDuplicatesInString;

use PHPUnit\Framework\TestCase;
use Problems\Simple\RemoveAllAdjacentDuplicatesInString\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $s
     * @param string $expected
     * @return void
     */
    public function removeDuplicates(string $s, string $expected): void
    {
        $solution = new Solution();

        $actual = $solution->removeDuplicates($s);

        $this->assertEquals($expected, $actual);
    }

    private function dataProvider(): array
    {
        return
            [
                ['abbaca', 'ca'],
                ['azxxzy', 'ay'],
            ];
    }
}
