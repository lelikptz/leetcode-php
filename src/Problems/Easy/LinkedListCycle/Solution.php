<?php

declare(strict_types=1);

namespace Problems\Easy\LinkedListCycle;

use Structure\ListNode;

final class Solution
{
    public function hasCycle(ListNode $head): bool
    {
        $values = [];
        $cur = $head;
        while (true) {
            if ($cur->next === null) {
                return false;
            }
            if (isset($values[spl_object_id($cur)])) {
                return true;
            }

            $values[spl_object_id($cur)] = 1;
            $cur = $cur->next;
        }
    }
}
