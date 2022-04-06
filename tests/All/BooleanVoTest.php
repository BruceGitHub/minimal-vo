<?php

namespace Tests\All;

use MinimalVo\BaseValueObject\BooleanVo;
use Tests\AbstractUnitTestCase;

class BooleanVoTest extends AbstractUnitTestCase
{
    /** @test */
    public function it_create_true(): void
    {
        $sut = new BooleanVo(true);
        $this->assertSame(true,$sut->toValue());
    }

    /** @test */
    public function it_create_false(): void
    {
        $sut = new BooleanVo(false);
        $this->assertSame(false,$sut->toValue());
    }

    /** @test */
    public function it_equals(): void
    {
        $sut1 = new BooleanVo(true);
        $sut2 = new BooleanVo(true);
        $this->assertTrue($sut1->equal($sut2));
    }

    /** @test */
    public function it_not_equals(): void
    {
        $sut1 = new BooleanVo(false);
        $sut2 = new BooleanVo(true);
        $this->assertFalse($sut1->equal($sut2));
    }

    /** @test */
    public function it_duplicate(): void
    {
        $sut1 = new BooleanVo(false);
        $sut2 = $sut1->duplicate();
        $this->assertTrue($sut1->equal($sut2));
    }

}

