<?php

namespace Tests\All;

use MinimalVo\BaseValueObject\BooleanVo;
use MinimalVo\BaseValueObject\FloatVo;
use MinimalVo\BaseValueObject\IntegerVo;
use Tests\AbstractUnitTestCase;

class FloatVoTest extends AbstractUnitTestCase
{
    /** @test */
    public function it_create(): void
    {
        $sut = new FloatVo(1);
        $this->assertSame(1,$sut->vl());
    }

    /** @test */
    public function it_equals(): void
    {
        $sut1 = new FloatVo(1.0);
        $sut2 = new FloatVo(1.0);
        $this->assertTrue($sut1->equal($sut2));
    }

    /** @test */
    public function it_not_equals(): void
    {
        $sut1 = new FloatVo(1.0);
        $sut2 = new FloatVo(2.0);
        $this->assertFalse($sut1->equal($sut2));
    }

    /** @test */
    public function it_duplicate(): void
    {
        $sut1 = new FloatVo(1.0);
        $sut2 = $sut1->duplicate();
        $this->assertTrue($sut1->equal($sut2));
    }


}

