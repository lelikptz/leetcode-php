<?php

declare(strict_types=1);

namespace Structure;

trait CreateList
{
    public function createList(array $array): ListNode
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
