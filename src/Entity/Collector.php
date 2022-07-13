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
        $this->totalApplesWeight = 0;
        $this->totalPears = 0;
        $this->totalPearsWeight = 0;
    }

    public function getTotalTrees(): int
    {
        return $this->totalTrees;
    }

    public function getTotalApples(): int
    {
        return $this->totalApples;
    }

    public function getTotalPears(): int
    {
        return $this->totalPears;
    }

    public function getTotalApplesWeight(): int
    {
        return $this->totalApplesWeight;
    }

    public function getTotalPearsWeight(): int
    {
        return $this->totalPearsWeight;
    }

    public function state() : string
    {
        return 'Обработано деревьев: ' . $this->getTotalTrees() .
            '. Собрано яблок: ' . $this->getTotalApples() . ' общей массой ' . (float)$this->getTotalApplesWeight()/1000 . 'kg' .
            '. Собрано груш: ' . $this->getTotalPears() . ' общей массой ' . (float)$this->getTotalPearsWeight()/1000 . 'kg';
    }
}