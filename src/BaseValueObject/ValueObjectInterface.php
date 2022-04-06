<?php

declare(strict_types=1);

namespace MinimalVo\BaseValueObject;

/**
 * @template TValue
 * @template TVo
 */
interface ValueObjectInterface
{
    /** @param TVo $vo */
    public function equal($vo): bool;

    public function valid(): bool;

    /**
     * @return TVo
     */
    public function duplicate();

    /** @return TValue */
    public function toValue();
}
