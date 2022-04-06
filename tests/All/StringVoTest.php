<?php

namespace Tests\All;

use MinimalVo\BaseValueObject\StringVo;
use Tests\AbstractUnitTestCase;

class StringVoTest extends AbstractUnitTestCase
{
    /** @test */
    public function it_create(): void
    {
        $sut = new StringVo('hello');
        $this->assertSame('hello',$sut->toValue());
    }

    /** @test */
    public function it_equals(): void
    {
        $sut1 = new StringVo('hello');
        $sut2 = new StringVo('hello');
        $this->assertTrue($sut1->equal($sut2));
    }

    /** @test */
    public function it_not_equals(): void
    {
        $sut1 = new StringVo('hello1');
        $sut2 = new StringVo('hello2');
        $this->assertFalse($sut1->equal($sut2));
    }

    /** @test */
    public function it_duplicate(): void
    {
        $sut1 = new StringVo('hello');
        $sut2 = $sut1->duplicate();
        $this->assertTrue($sut1->equal($sut2));
    }
}

