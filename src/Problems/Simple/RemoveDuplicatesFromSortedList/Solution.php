<?php

declare(strict_types=1);

namespace Problems\Simple\RemoveDuplicatesFromSortedList;

use Structure\ListNode;

final class Solution
{
    public function deleteDuplicates(ListNode $head): ListNode
    {
        $cur = $head;
        while ($head !== null && $head->next !== null) {
            if ($head->val === $head->next->val) {
                $head->next = $head->next->next;
            } else {
                $head = $head->next;
            }
        }

        return $cur;
    }
}
