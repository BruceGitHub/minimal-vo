<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

use MinimalVo\FactoryTrait\StringVoFactoryTrait;

/**
* @template-extends AbstractVo<string,StringVo>
*/
final class StringVo extends AbstractVo
{
    use StringVoFactoryTrait;

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
        return true;
    }
}
