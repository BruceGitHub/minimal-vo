<?php

declare(strict_types=1);

namespace BaseValueObject\BaseValueObject;


/**
* @template TValue
* @template-implements ValueObject<TValue>
*/ 
abstract class AbstractVo implements ValueObject
{
    
    /** @param TValue $value */
    public function __construct(private $value) {}
    
       
   /** @return TValue */ 
   public function vl()
   {
       return $this->value;
   }
}
