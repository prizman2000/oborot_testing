<?php

namespace App\Entity\Tree\Fabric;

use App\Entity\Tree\Apple;
use App\Entity\Tree\TreeInterface;

class AppleFabric extends TreeFabric
{
    function createTree(): TreeInterface
    {
        return new Apple();
    }
}