<?php

namespace Potter\Dimension\Parent;

use Potter\Dimension\{
    AbstractDimension,
    Child\ChildDimensionInterface
};

abstract class AbstractParentDimension extends AbstractDimension implements ParentDimensionInterface
{
    abstract public function alterChild(ChildDimensionInterface $child): void;

    abstract public function childExists(string $childName): bool;

    abstract public function createChild(ChildDimensionInterface $child): void;

    abstract public function createChildIfNotExists(ChildDimensionInterface $child): void;

    abstract public function dropChild(string $childName): void;
    
    abstract public function getChild(string $childName): ChildDimensionInterface;

    abstract public function getChildren(bool $refresh = false): array;

    abstract public function refreshChildren(): array;
}