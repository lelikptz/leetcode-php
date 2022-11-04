<?php

declare(strict_types=1);

namespace Structure;

final class TreeNode
{
    public function __construct(public int $val = 0, public ?TreeNode $left = null, public ?TreeNode $right = null)
    {
    }
}
