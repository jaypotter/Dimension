<?php

namespace Potter\Dimension\Child;

use Potter\Dimension\{
    AbstractDimension,
    Parent\ParentDimensionInterface
};

abstract class AbstractChildDimension extends AbstractDimension implements ChildDimensionInterface
{
    abstract public function getParent(): ParentDimensionInterface;

    abstract public function getSelf(): ChildDimensionInterface;

    abstract public function setParent(ParentDimensionInterface $parentDimension): void;
}