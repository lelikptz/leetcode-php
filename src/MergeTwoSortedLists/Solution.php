<?php

declare(strict_types=1);

namespace MergeTwoSortedLists;

final class Solution
{
    /**
     * @param ListNode $a
     * @param ListNode $b
     * @return ListNode
     */
    public function mergeTwoLists(ListNode $a, ListNode $b): ListNode
    {
        $current = new ListNode();
        $current->val = 0;
        $head = $current;
        while (null !== $a && null !== $b) {
            if ($a->val > $b->val) {
                $current->next = $b;
                $b = $b->next;
            } else {
                $current->next = $a;
                $a = $a->next;
            }
            $current = $current->next;
        }

        $current->next = $a ?? $b;

        return $head->next;
    }
}
