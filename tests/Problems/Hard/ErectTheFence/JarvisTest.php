<?php

namespace tests\Problems\Hard\ErectTheFence;

use PHPUnit\Framework\TestCase;
use Problems\Hard\ErectTheFence\Jarvis;

class JarvisTest extends TestCase
{
    use DataProvider;

    /**
     * @test
     * @dataProvider dataProvider
     * @param array $trees
     * @param array $expected
     * @return void
     */
    public function outerTrees(array $trees, array $expected): void
    {
        $solution = new Jarvis();

        $actual = $solution->outerTrees($trees);

        $this->assertCount(count($expected), $actual);

        foreach ($expected as $item) {
            $this->assertContains($item, $actual);
        }
    }
}
