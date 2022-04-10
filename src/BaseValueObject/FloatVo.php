<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

use MinimalVo\FactoryTrait\FloatVoFactoryTrait;

/**
* @template-extends AbstractVo<float,FloatVo>
*/
final class FloatVo extends AbstractVo
{
    use FloatVoFactoryTrait;

    public function equal($vo): bool
    {
        return $this->value === $vo->toValue();
    }

    public function duplicate()
    {
        return new self($this->value);
    }

    protected function valid(): bool
    {
        return is_float($this->value);
    }
}
