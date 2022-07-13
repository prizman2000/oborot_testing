<?php

namespace App\Entity\Tree;

use App\Types\TreeTypes;

class Pear implements TreeInterface
{
    private int $fruits;

    public function __construct()
    {
        $this->setFruits();
    }

    function setFruits()
    {
        $this->fruits = rand(0, 20);
    }

    function getFruits(): int
    {
        return $this->fruits;
    }

    function getType(): string
    {
        return TreeTypes::PEER;
    }
}