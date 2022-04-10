<?php declare(strict_types=1);

namespace MinimalVo\FactoryTrait;

trait StringVoFactoryTrait
{
    public static function fromValue(string $value): self
    {
        return new self($value);
    }
}
