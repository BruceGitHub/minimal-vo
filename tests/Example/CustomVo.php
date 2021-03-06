<?php

namespace Tests\Example;

use MinimalVo\BaseValueObject\AbstractVo;

/**
 * @template-extends AbstractVo<bool,CustomVo>
 */
class CustomVo extends AbstractVo
{

    public function __construct(bool $value, protected string $value2)
    {
        parent::__construct($value);
    }


    public function equal($vo): bool
    {
        if ($this->value === $vo->value &&
            $this->value2 === $vo->value2) {
            return true;
        }

        return false;
    }

    public function valid(): bool
    {
        if ($this->value && $this->value2) {
            return true;
        }

        return false;
    }

    public function duplicate()
    {
        return new self($this->value, $this->value2);
    }
}
