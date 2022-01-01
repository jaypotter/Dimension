<?php

namespace Potter\Dimension;

abstract class AbstractDimension implements DimensionInterface
{
    abstract public function alter(): void;

    abstract public function create(): void;

    abstract public function createIfNotExists(): void;

    abstract public function drop(): void;

    abstract public function exists(): bool;
}