<?php

namespace Potter\Dimension\Parent;

use Potter\Dimension\{
    DimensionInterface,
    Child\ChildDimensionInterface
};

interface ParentDimensionInterface extends DimensionInterface
{
    public function alterChild(ChildDimensionInterface $child);

    public function childExists(string $childName): bool;

    public function createChild(ChildDimensionInterface $child);

    public function createChildIfNotExists(ChildDimensionInterface $child): void;

    public function dropChild(string $childName);

    public function getChild(string $childName): ChildDimensionInterface;

    public function getChildren(bool $refresh = false): array;

    public function refreshChildren(): array;
}