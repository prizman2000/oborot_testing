<?php

namespace App\Entity;

use App\Types\TreeTypes;

class Collector
{
    private int $totalTrees;
    private int $totalApples;
    private int $totalApplesWeight;
    private int $totalPears;
    private int $totalPearsWeight;

    public function __construct()
    {
        $this->totalTrees = 0;
        $this->totalApples = 0;
        $this->totalApplesWeight = 0;
        $this->totalPears = 0;
        $this->totalPearsWeight = 0;
    }

    public function collect(Garden $garden)
    {
        $this->clean();

        foreach ($garden->getTrees() as $tree) {
            $this->totalTrees++;
            if ($tree->getType() == TreeTypes::APPLE) {
                foreach ($tree->getFruits() as $fruitWeight) {
                    $this->totalApples++;
                    $this->totalApplesWeight += $fruitWeight;
                }
            } elseif ($tree->getType() == TreeTypes::PEER) {
                foreach ($tree->getFruits() as $fruitWeight) {
                    $this->totalPears++;
                    $this->totalPearsWeight += $fruitWeight;
                }
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
        return 'Обработано деревьев: ' . $this->totalTrees .
            '. Собрано яблок: ' . $this->totalApples . ' общей массой ' . (float)$this->totalApplesWeight/1000 . 'kg' .
            '. Собрано груш: ' . $this->totalPears . ' общей массой ' . (float)$this->totalPearsWeight/1000 . 'kg';
    }
}