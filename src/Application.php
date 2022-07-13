<?php

namespace App;

use App\Entity\Collector;
use App\Entity\Garden;
use App\Entity\Tree\Fabric\AppleFabric;
use App\Entity\Tree\Fabric\PearFabric;

class Application
{
    private AppleFabric $appleFabric;
    private PearFabric $peerFabric;
    private int $appleValue = 10;
    private int $pearValue = 15;
    private int $registerNumber;

    public function __construct()
    {
        $this->appleFabric = new AppleFabric();
        $this->peerFabric = new PearFabric();
        $this->registerNumber = 1;
    }

    public function run()
    {
        $garden = new Garden();
        $collector = new Collector();

        for ($i = 0; $i < $this->appleValue; $i++) {
            $garden->addTree($this->appleFabric->createTree($this->registerNumber));
            $this->registerNumber++;
        }

        for ($i = 0; $i < $this->pearValue; $i++) {
            $garden->addTree($this->peerFabric->createTree($this->registerNumber));
            $this->registerNumber++;
        }

        $collector->collect($garden);

        echo $collector->state();
    }
}