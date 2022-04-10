<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

use MinimalVo\FactoryTrait\IntegerVoFactoryTrait;

/**
* @template-extends AbstractVo<int,IntegerVo>
*/
final class IntegerVo extends AbstractVo
{
    use IntegerVoFactoryTrait;

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
        return is_int($this->value);
    }
}
