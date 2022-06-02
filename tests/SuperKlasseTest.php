<?php

use Thomas\GithubActionTest\SuperKlasse;
use PHPUnit\Framework\TestCase;

class SuperKlasseTest extends TestCase
{

    public function testCalculate()
    {
        $superKlasse = new SuperKlasse();
        $this->assertEquals(39, $superKlasse->calculate(29));
    }
}
