<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

use MinimalVo\FactoryTrait\BooleanVoFactoryTrait;

/**
* @template-extends AbstractVo<bool,BooleanVo>
*/
final class BooleanVo extends AbstractVo
{
    use BooleanVoFactoryTrait;

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
        return is_bool($this->value);
    }
}
