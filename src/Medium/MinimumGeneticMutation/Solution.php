<?php

declare(strict_types=1);

namespace Medium\MinimumGeneticMutation;

final class Solution
{
    /**
     * @param string $start
     * @param string $end
     * @param string[] $bank
     * @return int
     */
    public function minMutation(string $start, string $end, array $bank): int
    {
        $visited = [$start];
        $graph = [1 => [$start]];
        $n = 1;

        while (!empty($bank)) {
            if (!isset($graph[$n])) {
                return -1;
            }
            $cur = $graph[$n];
            foreach ($cur as $iValue) {

                foreach ($bank as $element) {
                    if (!in_array($element, $visited, true)) {
                        $diff = 0;
                        for ($j = 0; $j < 8; $j++) {
                            if ($iValue[$j] !== $element[$j]) {
                                $diff++;
                            }
                        }


                        if ($diff === 1) {
                            if ($element === $end) {
                                return $n;
                            }

                            $k = array_search($iValue, $bank);
                            unset($k);
                            $bank = array_values($bank);

                            $graph[$n + 1][] = $element;
                            $visited[] = $element;
                        }
                    }
                }
            }

            $n++;
        }

        return -1;
    }
}
