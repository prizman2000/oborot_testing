<?php

namespace App\Entity\Tree;

interface TreeInterface
{
    function setFruits();

    function getFruits() : array;

    function getType() : string;
}