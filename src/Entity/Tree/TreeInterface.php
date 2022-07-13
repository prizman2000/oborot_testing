<?php

namespace App\Entity\Tree;

interface TreeInterface
{
    function setFruits();

    function getFruits() : int;

    function getType() : string;
}