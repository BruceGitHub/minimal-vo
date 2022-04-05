<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

/**
* @template-extends AbstractValueObject<bool,BooleanVo>
*/
class BooleanVo extends AbstractValueObject
{
    public function equal($vo): bool
    {
        return $this->value === $vo->vl();
    }

    public function duplicate()
    {
        return new self($this->value);
    }

    public function valid(): bool
    {
        return is_bool($this->value);
    }
}
