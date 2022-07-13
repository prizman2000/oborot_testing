<?php

namespace App\Entity\Tree\Fabric;

use App\Entity\Tree\TreeInterface;

abstract class TreeFabric
{
    abstract function createTree() : TreeInterface;
}