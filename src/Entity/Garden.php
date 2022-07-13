<?php

namespace App\Entity;

use App\Entity\Tree\TreeInterface;

class Garden
{
    private array $trees;

    public function __construct()
    {
        $this->trees = [];
    }

    public function addTree(TreeInterface $tree)
    {
        array_push($this->trees, $tree);
    }

    public function getTrees(): array
    {
        return $this->trees;
    }
}