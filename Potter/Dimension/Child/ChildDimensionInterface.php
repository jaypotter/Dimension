<?php

namespace Potter\Dimension\Child;

use Potter\Dimension\{
    DimensionInterface,
    Parent\ParentDimensionInterface
};

interface ChildDimensionInterface extends DimensionInterface
{
    public function getParent(): ParentDimensionInterface;

    public function getSelf(): ChildDimensionInterface;

    public function setParent(ParentDimensionInterface $parentDimension): void;
}