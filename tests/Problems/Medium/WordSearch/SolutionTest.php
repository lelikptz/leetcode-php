<?php

declare(strict_types=1);

namespace tests\Problems\Medium\WordSearch;

use Problems\Medium\WordSearch\Solution;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $board
     * @param string $word
     * @param bool $expected
     * @return void
     */
    public function exist(array $board, string $word, bool $expected): void
    {
        $solution = new Solution();

        $time = time();
        $actual = $solution->exist($board, $word);

        $this->assertEquals($expected, $actual);
        $this->assertLessThan(5, time() - $time);
    }

    public function dataProvider(): array
    {
        return
            [
                [[['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']], 'ABCCED', true],
                [[['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']], 'SEE', true],
                [[['A', 'B', 'C', 'E'], ['S', 'F', 'C', 'S'], ['A', 'D', 'E', 'E']], 'ABCB', false],
                [[['A', 'B', 'C', 'E'], ['S', 'F', 'E', 'S'], ['A', 'D', 'E', 'E']], 'ABCESEEEFS', true],
                [[['A', 'A', 'A', 'A', 'A', 'A'], ['A', 'A', 'A', 'A', 'A', 'A'], ['A', 'A', 'A', 'A', 'A', 'A'], ['A', 'A', 'A', 'A', 'A', 'A'], ['A', 'A', 'A', 'A', 'A', 'A'], ['A', 'A', 'A', 'A', 'A', 'A']], 'AAAAAAAAAAAAAAB', false],
            ];
    }
}
