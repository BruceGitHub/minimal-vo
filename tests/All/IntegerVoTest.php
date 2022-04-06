<?php

namespace Tests\All;

use MinimalVo\BaseValueObject\IntegerVo;
use Tests\AbstractUnitTestCase;

class IntegerVoTest extends AbstractUnitTestCase
{
    /** @test */
    public function it_create(): void
    {
        $sut = new IntegerVo(1);
        $this->assertSame(1,$sut->toValue());
    }

    /** @test */
    public function it_equals(): void
    {
        $sut1 = new IntegerVo(1);
        $sut2 = new IntegerVo(1);
        $this->assertTrue($sut1->equal($sut2));
    }

    /** @test */
    public function it_not_equals(): void
    {
        $sut1 = new IntegerVo(1);
        $sut2 = new IntegerVo(2);
        $this->assertFalse($sut1->equal($sut2));
    }

    /** @test */
    public function it_duplicate(): void
    {
        $sut1 = new IntegerVo(1);
        $sut2 = $sut1->duplicate();
        $this->assertTrue($sut1->equal($sut2));
    }
}

