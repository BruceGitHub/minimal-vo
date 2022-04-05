<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

/**
* @template TValue
* @template TVo
* @template-implements ValueObjectInterface<TValue,TVo>
*/
abstract class AbstractValueObject implements ValueObjectInterface
{
    /** @param TValue $value */
    public function __construct(protected $value)
    {
    }

    /** @return TValue */
    public function vl()
    {
        return $this->value;
    }
}
