<?php

declare(strict_types=1);

namespace tests\Problems\Hard\ErectTheFence;

trait DataProvider
{
    public function dataProvider(): array
    {
        return
            [
                [[[1, 1], [2, 2], [2, 0], [2, 4], [3, 3], [4, 2]], [[1, 1], [2, 0], [3, 3], [2, 4], [4, 2]]],
                [[[1, 2], [2, 2], [4, 2]], [[4, 2], [2, 2], [1, 2]]],
                [[[0, 2], [1, 1], [2, 2], [2, 4], [4, 2], [3, 3]], [[0, 2], [4, 2], [3, 3], [1, 1], [2, 4]]],
                [[[0, 2], [1, 1], [2, 2], [2, 4], [4, 2], [3, 3]], [[0, 2], [4, 2], [3, 3], [1, 1], [2, 4]]],
                [[[1, 2], [2, 2], [4, 2], [5, 2], [6, 2], [7, 2]], [[4, 2], [6, 2], [2, 2], [5, 2], [1, 2], [7, 2]]],
            ];
    }
}