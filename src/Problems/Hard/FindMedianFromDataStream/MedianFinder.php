<?php

declare(strict_types=1);

namespace Problems\Hard\FindMedianFromDataStream;

use SplMaxHeap;
use SplMinHeap;

class MedianFinder
{
    private SplMinHeap $high;
    private SplMaxHeap $low;

    public function __construct()
    {
        $this->low = new SplMaxHeap();
        $this->high = new SplMinHeap();
    }

    public function addNum(int $num): void
    {
        if ($this->high->isEmpty()) {
            $this->high->insert($num);
        } elseif ($num < $this->high->top()) {
            $this->low->insert($num);
        } else {
            $this->high->insert($num);
        }

        $diff = $this->high->count() - $this->low->count();
        if ($diff > 1) {
            $this->low->insert($this->high->extract());
        } elseif ($diff < 0) {
            $this->high->insert($this->low->extract());
        }
    }

    public function findMedian(): float
    {
        if ($this->high->count() === $this->low->count()) {
            return ($this->high->top() + $this->low->top()) / 2;
        }

        return $this->high->top();
    }
}
