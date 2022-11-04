<?php

declare(strict_types=1);

namespace tests\Problems\Medium\MinimumGeneticMutation;

use PHPUnit\Framework\TestCase;
use Problems\Medium\MinimumGeneticMutation\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param string $start
     * @param string $end
     * @param array $bank
     * @param int $expected
     * @return void
     */
    public function findBall(string $start, string $end, array $bank, int $expected): void
    {
        $solution = new Solution();

        $actual = $solution->minMutation($start, $end, $bank);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                ['AACCGGTT', 'AACCGGTA', ['AACCGGTA'], 1],
                ['AACCGGTT', 'AAACGGTA', ['AACCGGTA', 'AACCGCTA', 'AAACGGTA'], 2],
                ['AAAAAAAA', 'AAAAACGG', ['AAAAAAGA','AAAAAGGA','AAAAACGA','AAAAACGG','AAAAAAGG','AAAAAAGC'], 3],
                ['AAAAAAAA', 'CCCCCCCC', ['AAAAAAAA', 'AAAAAAAC', 'AAAAAACC', 'AAAAACCC', 'AAAACCCC', 'AACACCCC', 'ACCACCCC', 'ACCCCCCC', 'CCCCCCCA'], -1],
            ];
    }
}
