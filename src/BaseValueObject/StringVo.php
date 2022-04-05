<?php

declare(strict_types=1);

namespace BaseValueObject\BaseValueObject;

/**
* @template-extends AbstractVo<string>
*/ 
class StringVo extends AbstractVo
{
   public function equal($val): bool
   {
       return $this->value === $val;
   }
    
   public function valid(): bool
   {
       return true; 
   }
}