<?php

namespace Potter\Dimension\Hybrid;

use Potter\Dimension\{
    AbstractDimension,
    Child\ChildDimensionInterface,
    Parent\ParentDimensionInterface
};

abstract class AbstractHybridDimension extends AbstractDimension implements ChildDimensionInterface, ParentDimensionInterface
{
    abstract public function alterChild(ChildDimensionInterface $child): void;

    abstract public function childExists(string $childName): bool;

    abstract public function createChild(ChildDimensionInterface $child): void;

    abstract public function createChildIfNotExists(ChildDimensionInterface $child): void;

    abstract public function dropChild(string $childName): void;

    abstract public function getChild(string $childName): ChildDimensionInterface;

    abstract public function getChildren(bool $refresh = false): array;

    abstract public function getParent(): ParentDimensionInterface;

    abstract public function getSelf(): ChildDimensionInterface;

    abstract public function refreshChildren(): array;

    abstract public function setParent(ParentDimensionInterface $parentDimension): void;
}