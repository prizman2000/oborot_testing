<?php

namespace App\Entity;

use App\Types\TreeTypes;

class Collector
{
    private int $totalTrees;
    private int $totalApples;
    private int $totalPears;

    public function __construct()
    {
        $this->totalTrees = 0;
        $this->totalApples = 0;
        $this->totalPears = 0;
    }

    public function collect(Garden $garden)
    {
        $this->clean();

        foreach ($garden->getTrees() as $tree) {
            $this->totalTrees++;
            if ($tree->getType() == TreeTypes::APPLE) {
                $this->totalApples += $tree->getFruits();
            } elseif ($tree->getType() == TreeTypes::PEER) {
                $this->totalPears += $tree->getFruits();
            }
        }
    }

    public function clean()
    {
        $this->totalTrees = 0;
        $this->totalApples = 0;
        $this->totalPears = 0;
    }

    public function state() : string
    {
        return 'Обработано деревьев: ' . $this->totalTrees . '. Собрано яблок: ' . $this->totalApples . '. Собрано груш: ' . $this->totalPears;
    }
}