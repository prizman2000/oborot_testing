<?php

namespace App\Entity\Tree;

use App\Types\TreeTypes;

class Apple implements TreeInterface
{
    private int $fruits;

    public function __construct()
    {
        $this->setFruits();
    }

    function setFruits()
    {
        $this->fruits = rand(40, 50);
    }

    function getFruits(): int
    {
        return $this->fruits;
    }

    function getType(): string
    {
        return TreeTypes::APPLE;
    }
}