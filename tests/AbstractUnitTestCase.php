<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

abstract class AbstractUnitTestCase extends TestCase
{
    use ProphecyTrait;


}
