<?php

declare(strict_types=1);

namespace tests\Problems\Medium\AddTwoNumbers;

use Problems\Medium\AddTwoNumbers\Solution;
use PHPUnit\Framework\TestCase;
use Structure\CreateList;
use Structure\ListNode;

class SolutionTest extends TestCase
{
    use CreateList;

    /**
     * @test
     * @dataProvider dataProvider
     * @param ListNode $l1
     * @param ListNode $l2
     * @param ListNode $expected
     * @return void
     */
    public function addTwoNumbers(ListNode $l1, ListNode $l2, ListNode $expected): void
    {
        $solution = new Solution();

        $actual = $solution->addTwoNumbers($l1, $l2);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        return
            [
                [$this->createList([2, 4, 3]), $this->createList([5, 6, 4]), $this->createList([7, 0, 8]),],
                [$this->createList([0]), $this->createList([0]), $this->createList([0]),],
                [
                    $this->createList([9, 9, 9, 9, 9, 9, 9]),
                    $this->createList([9, 9, 9, 9]),
                    $this->createList([8, 9, 9, 9, 0, 0, 0, 1]),
                ],
            ];
    }
}
