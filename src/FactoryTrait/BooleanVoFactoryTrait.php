<?php declare(strict_types=1);

namespace MinimalVo\FactoryTrait;

trait BooleanVoFactoryTrait
{
    public static function fromValue(bool $value): self
    {
        return new self($value);
    }
}
