<?php

namespace Tests\Example;

use MinimalVo\BaseValueObject\AbstractVo;

/**
 * @template-extends AbstractVo<\DateTimeImmutable,CustomDateTimeVo>
 */
class CustomDateTimeVo extends AbstractVo
{

    public function __construct(\DateTimeImmutable $value)
    {
        parent::__construct($value);
    }


    public function equal($vo): bool
    {
        if ($this->value === $vo->toValue()) {
            return true;
        }

        return false;
    }

    public function valid(): bool
    {
        return false;
    }

    public function duplicate()
    {
        return new self($this->value);
    }
}
