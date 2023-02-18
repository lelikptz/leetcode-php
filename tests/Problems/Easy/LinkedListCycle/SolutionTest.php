<?php

declare(strict_types=1);

namespace tests\Problems\Easy\LinkedListCycle;

use PHPUnit\Framework\TestCase;
use Problems\Easy\LinkedListCycle\Solution;
use Structure\ListNode;

final class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     * @param ListNode $head
     * @param bool $expected
     * @return void
     */
    public function hasCycle(ListNode $head, bool $expected): void
    {
        $solution = new Solution();

        $actual = $solution->hasCycle($head);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider(): array
    {
        $last = new ListNode(-4);
        $b = new ListNode(2, new ListNode(0, $last));
        $head = new ListNode(3, $b);
        $last->next = $b;

        $a = new ListNode(1);
        $b = new ListNode(1, $a);
        $a->next = $b;

        return [
            [$head, true],
            [$b, true],
            [new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4)))), false],
        ];
    }
}
