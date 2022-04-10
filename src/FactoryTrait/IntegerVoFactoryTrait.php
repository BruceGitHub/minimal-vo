<?php declare(strict_types=1);

namespace MinimalVo\FactoryTrait;

trait IntegerVoFactoryTrait
{
    public static function fromValue(int $value): self
    {
        return new self($value);
    }
}
