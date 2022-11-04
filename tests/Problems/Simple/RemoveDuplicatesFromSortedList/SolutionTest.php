<?php

declare(strict_types=1);

namespace tests\Problems\Simple\RemoveDuplicatesFromSortedList;

use PHPUnit\Framework\TestCase;
use Problems\Simple\RemoveDuplicatesFromSortedList\Solution;
use Structure\ListNode;

final class SolutionTest extends TestCase
{
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

    private function createList(array $array): ListNode
    {
        /** @var ListNode[] $array */
        $array = array_map(static function (int $value) {
            $l = new ListNode();
            $l->val = $value;
            return $l;
        }, $array);

        foreach ($array as $key => $item) {
            $item->next = $array[$key + 1] ?? null;
        }

        return array_shift($array);
    }
}
