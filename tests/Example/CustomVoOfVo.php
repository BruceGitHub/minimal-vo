<?php

namespace Tests\Example;

use MinimalVo\BaseValueObject\AbstractVo;
use MinimalVo\BaseValueObject\IntegerVo;

/**
 * @template-extends AbstractVo<IntegerVo,CustomVoOfVo>
 */
class CustomVoOfVo extends AbstractVo
{

    public function __construct(IntegerVo $value, protected int $value2)
    {
        parent::__construct($value);
    }


    public function equal($vo): bool
    {
        if ($this->value === $vo->toValue() &&
            $this->value2 === $vo->value2) {
            return true;
        }

        return false;
    }

    public function valid(): bool
    {
        if ($this->value->toValue() >1 && $this->value2>1) {
            return true;
        }

        return false;
    }

    public function duplicate()
    {
        return new self($this->value, $this->value2);
    }
}
