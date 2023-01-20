<?php

declare(strict_types=1);

namespace Problems\Medium\AddTwoNumbers;

use Structure\ListNode;

final class Solution
{
    public function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
    {
        $result = new ListNode();
        $current = $result;
        $carry = 0;

        while ($l1 !== null || $l2 !== null) {
            if ($l1 === null) {
                $val = $l2->val + $carry;
            } elseif ($l2 === null) {
                $val = $l1->val + $carry;
            } else {
                $val = $l1->val + $l2->val + $carry;
            }

            $l1 = $l1 !== null ? $l1->next : $l1;
            $l2 = $l2 !== null ? $l2->next : $l2;

            if ($val >= 10) {
                $carry = intdiv($val, 10);
                $val %= 10;
            } else {
                $carry = 0;
            }

            $current->val = $val;
            if ($l1 !== null || $l2 !== null) {
                $current->next = new ListNode();
                $current = $current->next;
            }
        }

        if ($carry) {
            $current->next = new ListNode($carry);
        }

        return $result;
    }
}
