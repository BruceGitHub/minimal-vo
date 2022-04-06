<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

/**
* @template TValue
* @template TVo
* @template-implements ValueObjectInterface<TValue,TVo>
*/
abstract class AbstractVo implements ValueObjectInterface
{
    /** @param TValue $value */
    public function __construct(protected $value)
    {
    }

    /** @return TValue */
    public function toValue()
    {
        return $this->value;
    }
}
