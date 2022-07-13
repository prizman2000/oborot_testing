<?php

use App\Entity\Collector;
use App\Entity\Garden;
use App\Entity\Tree\Pear;
use App\Entity\Tree\Apple;
use PHPUnit\Framework\TestCase;

final class CollectorTest extends TestCase
{
    public function testTotalValueOfTrees(): void
    {
        $garden = new Garden();
        $collector = new Collector();

        for ($i = 0; $i < 10; $i++) {
            $garden->addTree(new Apple($i));
        }

        for ($i = 10; $i < 25; $i++) {
            $garden->addTree(new Pear($i));
        }

        $collector->collect($garden);

        $this->assertEquals(
            sizeof($garden->getTrees()),
            $collector->getTotalTrees()
        );
    }
}