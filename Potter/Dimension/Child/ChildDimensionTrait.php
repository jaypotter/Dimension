<?php

namespace Potter\Dimension\Child;

use Potter\Dimension\Parent\ParentDimensionInterface;

trait ChildDimensionTrait
{
    private ParentDimensionInterface $parentDimension;

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
        $this->getParent()->dropChild($this->getName());
    }

    final public function exists(): bool
    {
        return $this->getParent()->childExists($this->getName());
    }

    abstract public function getName(): string;

    final public function getParent(): ParentDimensionInterface
    {
        return $this->parentDimension;
    }

    abstract public function getSelf(): ChildDimensionInterface;

    final public function setParent(ParentDimensionInterface $parentDimension): void
    {
        $this->parentDimension = $parentDimension;
    }
}