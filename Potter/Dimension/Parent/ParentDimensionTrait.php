<?php

namespace Potter\Dimension\Parent;

use Potter\Dimension\Child\ChildDimensionInterface;

trait ParentDimensionTrait
{
    private array $children;

    final public function childExists(string $childName): bool
    {
        return in_array($childName, $this->getChildren());
    }

    abstract public function create(): void;

    abstract public function createChild(ChildDimensionInterface $child): void;

    final public function createChildIfNotExists(ChildDimensionInterface $child): void
    {
        if ($this->childExists($child->getName())) {
            return;
        }
        $this->createChild($child);
    }

    final public function createIfNotExists(): void
    {
        if ($this->exists()) {
            return;
        }
        $this->create();
    }

    abstract public function exists(): bool;

    final public function getChildren(bool $refresh = false): array
    {
        return (!isset($this->children) || $refresh) ? $this->children = $this->refreshChildren() : $this->children;
    }

    abstract public function refreshChildren(): array;
}