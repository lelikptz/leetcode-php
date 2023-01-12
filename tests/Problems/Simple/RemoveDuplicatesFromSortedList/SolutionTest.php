<?php

declare(strict_types=1);

namespace tests\Problems\Simple\RemoveDuplicatesFromSortedList;

use PHPUnit\Framework\TestCase;
use Problems\Simple\RemoveDuplicatesFromSortedList\Solution;
use Structure\CreateList;
use Structure\ListNode;

final class SolutionTest extends TestCase
{
    use CreateList;

    /**
     * @test
     * @dataProvider dataProvider
     * @param ListNode $node
     * @param ListNode $expected
     * @return void
     */
    public function deleteDuplicates(ListNode $node, ListNode $expected): void
    {
        $solution = new Solution();

        $actual = $solution->deleteDuplicates($node);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [$this->createList([1, 1, 2]), $this->createList([1, 2])],
                [$this->createList([1, 1, 2, 3, 3]), $this->createList([1, 2, 3])],
                [$this->createList([1, 1, 1]), $this->createList([1])],
            ];
    }
}
