<?php

declare(strict_types=1);

namespace Whycash\Tests;

use PHPUnit\Framework\TestCase;
use Whycash\Money;

final class MoneyTest extends TestCase
{
    public function test_times(): void
    {
        $five = Money::dollar(5);
        $actual = $five->times(10);

        $expected = Money::dollar(50);
        $this->assertTrue($expected->equals($actual));
    }

    public function test_equality(): void
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(3)));

        $this->assertTrue(Money::euro(5)->equals(Money::euro(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::euro(5)));
    }
}
