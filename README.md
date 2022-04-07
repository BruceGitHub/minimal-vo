# minimal-vo

Minimal lib to use vo:  immutability, semantic, typed objects

[![Latest Stable Version](https://poser.pugx.org/brucegithub/minimal-vo/v)](//packagist.org/packages/brucegithub/minimal-vo)
[![Latest Unstable Version](https://poser.pugx.org/brucegithub/minimal-vo/v/unstable)](//packagist.org/packages/brucegithub/minimal-vo)
[![License](https://poser.pugx.org/brucegithub/minimal-vo/license)](//packagist.org/packages/brucegithub/minimal-vo)
[![Build Status](https://travis-ci.org/BruceGitHub/minimal-vo.svg?branch=master)](https://travis-ci.org/BruceGitHub/minimal-vo)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/BruceGitHub/minimal-vo/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/BruceGitHub/minimal-vo/?branch=master)
[![codecov](https://codecov.io/gh/BruceGitHub/minimal-vo/branch/master/graph/badge.svg)](https://codecov.io/gh/BruceGitHub/minimal-vo)

# Usage 

```
composer require brucegithub/minimal-vo
```


# Example 

```php
<?php

namespace Tests\Example;

use MinimalVo\BaseValueObject\AbstractVo;

/**
 * @template-extends AbstractVo<bool,CustomVo>
 */
class CustomVo extends AbstractVo
{

    public function __construct(bool $value, protected string $value2)
    {
        parent::__construct($value);
    }


    public function equal($vo): bool
    {
        if ($this->value === $vo->value &&
            $this->value2 === $vo->value2) {
            return true;
        }

        return false;
    }

    public function valid(): bool
    {
        if ($this->value && $this->value2) {
            return true;
        }

        return false;
    }

    public function duplicate()
    {
        return new self($this->value, $this->value2);
    }
}
```

```php
<?php

namespace Tests\Example;

use MinimalVo\BaseValueObject\AbstractVo;
use MinimalVo\BaseValueObject\IntegerVo;

/**
 * @template-extends AbstractVo<IntegerVo,CustomVoOfVo>
 */
class CustomVoOfVo extends AbstractVo
{

    public function __construct(IntegerVo $value, protected int $value2)
    {
        parent::__construct($value);
    }


    public function equal($vo): bool
    {
        if ($this->value === $vo->toValue() &&
            $this->value2 === $vo->value2) {
            return true;
        }

        return false;
    }

    public function valid(): bool
    {
        if ($this->value->toValue() >1 && $this->value2>1) {
            return true;
        }

        return false;
    }

    public function duplicate()
    {
        return new self($this->value, $this->value2);
    }
}
```

```php
<?php

namespace Tests\Example;

use MinimalVo\BaseValueObject\AbstractVo;

/**
 * @template-extends AbstractVo<\DateTimeImmutable,CustomDateTimeVo>
 */
class CustomDateTimeVo extends AbstractVo
{

    public function __construct(\DateTimeImmutable $value)
    {
        parent::__construct($value);
    }


    public function equal($vo): bool
    {
        if ($this->value === $vo->toValue()) {
            return true;
        }

        return false;
    }

    public function valid(): bool
    {
        return false;
    }

    public function duplicate()
    {
        return new self($this->value);
    }
}
```
