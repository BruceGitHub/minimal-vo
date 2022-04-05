<?php

declare(strict_types=1);

namespace BaseValueObject\BaseValueObject;

/**
 * @template TValue
 */
interface ValueObject
{
   /** @param TValue $val */ 
   public function equal($val): bool;  
    
   public function valid(): bool; 
    
   /** @return TValue $val */  
   public function vl();   
}

