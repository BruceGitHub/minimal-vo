<?php

namespace MinimalVo\FactoryTrait;

trait FloatVoFactoryTrait
{
    public static function fromValue(float $value): self
    {
        return new self($value);
    }
}
