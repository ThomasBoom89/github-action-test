<?php

declare(strict_types=1);

namespace Thomas\GithubActionTest;

class SuperKlasse
{
    /**
     * @param int $number
     * @return int
     */
    public function calculate(int $number): int
    {
        return $number + 10;
    }

    public function unused()
    {
        return 2;
    }
}
