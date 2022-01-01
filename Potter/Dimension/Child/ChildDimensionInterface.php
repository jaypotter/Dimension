<?php

namespace Potter\Dimension\Child;

use Potter\Dimension\{
    DimensionInterface,
    Child\ChildDimensionInterface,
    Parent\ParentDimensionInterface
};

interface ChildDimensionInterface extends DimensionInterface
{
    public function getParent(): ParentDimensionInterface;

    public function getSelf(): ChildDimensionInterface;

    public function setParent(ParentDimensionInterface $parentDimension): void;
}