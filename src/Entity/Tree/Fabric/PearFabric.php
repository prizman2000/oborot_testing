<?php

namespace App\Entity\Tree\Fabric;

use App\Entity\Tree\Pear;
use App\Entity\Tree\TreeInterface;

class PearFabric extends TreeFabric
{
    public function createTree(): TreeInterface
    {
        return new Pear();
    }
}