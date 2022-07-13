<?php

namespace App\Entity\Tree;

use App\Types\TreeTypes;

class Pear implements TreeInterface
{
    private int $id;
    private array $fruits;

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->fruits = $this->setFruits();
    }

    function setFruits()
    {
        $fruits = [];
        $total = rand(0, 20);
        for ($i = 0; $i < $total; $i++) {
            array_push($fruits, rand(130, 170));
        }

        return $fruits;
    }

    function getFruits(): array
    {
        return $this->fruits;
    }

    function getType(): string
    {
        return TreeTypes::PEER;
    }
}