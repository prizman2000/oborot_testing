<?php

namespace App\Entity\Tree;

use App\Types\TreeTypes;

class Apple implements TreeInterface
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
        $total = rand(40, 60);
        for ($i = 0; $i < $total; $i++) {
            array_push($fruits, rand(150, 180));
        }

        return $fruits;
    }

    function getFruits(): array
    {
        return $this->fruits;
    }

    function getType(): string
    {
        return TreeTypes::APPLE;
    }
}