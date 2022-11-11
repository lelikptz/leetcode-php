<?php

declare(strict_types=1);

namespace tests\Problems\Medium\GroupAnagrams;

use PHPUnit\Framework\TestCase;
use Problems\Medium\GroupAnagrams\Solution;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param array $strings
     * @param array $expected
     * @return void
     */
    public function groupAnagrams(array $strings, array $expected): void
    {
        $solution = new Solution();

        $actual = $solution->groupAnagrams($strings);


        $this->assertEquals(
            $this->sortElements($expected),
            $this->sortElements($actual)
        );
    }

    public function dataProvider(): array
    {
        return
            [
                [[''], [['']]],
                [['a'], [['a']]],
                [['eat', 'tea', 'tan', 'ate', 'nat', 'bat'], [['bat'], ['nat', 'tan'], ['eat', 'ate', 'tea']]],
            ];
    }

    private function sortElements(array $elements): array
    {
        sort($elements);
        foreach ($elements as &$item) {
            sort($item);
        }

        return $elements;
    }
}
