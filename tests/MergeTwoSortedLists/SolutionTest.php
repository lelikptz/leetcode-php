<?php

namespace tests\MergeTwoSortedLists;

use PHPUnit\Framework\TestCase;
use MergeTwoSortedLists\ListNode;
use MergeTwoSortedLists\Solution;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProviderList
     * @param ListNode $a
     * @param ListNode $b
     * @param ListNode $expected
     * @return void
     */
    public function mergeTwoLists(ListNode $a, ListNode $b, ListNode $expected): void
    {
        $solution = new Solution();

        $actual = $solution->mergeTwoLists($a, $b);

        $this->assertEquals($expected, $actual);
    }

    public function dataProviderList(): array
    {
        return [
            [
                $this->createList([1, 2, 4]),
                $this->createList([1, 3, 4]),
                $this->createList([1, 1, 2, 3, 4, 4])
            ],
            [
                $this->createList([1, 2, 3, 4]),
                $this->createList([5, 6, 7]),
                $this->createList([1, 2, 3, 4, 5, 6, 7])
            ]
        ];
    }

    private function createList(array $array): ListNode
    {
        /** @var ListNode[] $array */
        $array = array_map(function (int $value) {
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
