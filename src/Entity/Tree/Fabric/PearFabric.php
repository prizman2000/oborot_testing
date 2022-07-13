<?php

namespace App\Entity\Tree\Fabric;

use App\Entity\Tree\Pear;
use App\Entity\Tree\TreeInterface;

class PearFabric extends TreeFabric
{
    public function createTree(int $id): TreeInterface
    {
        return new Pear($id);
    }
}