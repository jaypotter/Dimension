<?php

namespace Potter\Dimension\Child;

use Potter\Dimension\Parent\ParentDimensionInterface;

trait ChildDimensionTrait
{
    private ParentDimensionInterface $parent;

    final public function alter(): void
    {
        $this->getParent()->alterChild($this->getSelf());
    }

    final public function create(): void
    {
        $this->getParent()->createChild($this->getSelf());
    }

    final public function createIfNotExists(): void
    {
        $this->getParent()->createChildIfNotExists($this->getSelf());
    }

    final public function drop(): void{
        $this->getParent()->createChild($this->getName());
    }

    final public function exists(): bool
    {
        $this->getParent()->childExists($this->getName());
    }

    abstract public function getName(): string;

    final public function getParent(): ParentDimensionInterface
    {
        return $this->parent;
    }

    abstract public function getSelf(): ChildDimensionInterface;

    final public function setParent(ParentDimensionInterface $parentDimension): void
    {
        $this->parent = $parent;
    }
}