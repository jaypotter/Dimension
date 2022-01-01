<?php

namespace Potter\Dimension\Name;

interface DimensionNameInterface
{
    public const ALLOWED_SPECIAL_CHARACTERS = ['_'];
    public const NAME_MAX_LENGTH = 64;

    public function alterName(string $name): void;

    public function getName(): string;

    public function nameIsValid(string $name): bool;

    public function setName(string $name): void;
}