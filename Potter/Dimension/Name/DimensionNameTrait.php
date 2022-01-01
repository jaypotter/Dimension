<?php

namespace Potter\Dimension\Name;

use \Exception;

trait DimensionNameTrait
{
    private string $name;

    abstract public function alterName(string $name): void;

    private function charactersAreValid(string $name): bool
    {
        return ctype_alnum(
            text: str_replace(
                search: DimensionNameInterface::ALLOWED_SPECIAL_CHARACTERS,
                replace: '',
                subject: $name
            )
        );
    }

    abstract public function exists(): bool;

    final public function getName(): string
    {
        return $this->name;
    }

    private function lengthisValid(string $name): bool
    {
        return $name <= DimensionNameInterface::NAME_MAX_LENGTH;
    }

    final public function nameIsValid(string $name): bool
    {
        return $this->charactersAreValid($name) && $this->lengthisValid($name);
    }

    final public function setName(string $name): void
    {
        if (!$this->nameisValid($name)) {
            throw new Exception;
        }
        $this->name = $name;
        if ($this->exists()) {
            $this->alterName($name);
        }
    }
}