<?php

namespace Potter\Dimension;

interface DimensionInterface extends DimensionNameInterface
{
    public function alter(): void;

    public function create(): void;

    public function createIfNotExists(): void;

    public function drop(): void;

    public function exists(): bool;
}