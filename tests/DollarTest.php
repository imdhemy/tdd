<?php

declare(strict_types=1);

namespace Whycash\Tests;

use PHPUnit\Framework\TestCase;
use Whycash\Dollar;
use Whycash\Euro;

final class DollarTest extends TestCase
{
    public function test_times(): void
    {
        $five = new Dollar(5);
        $actual = $five->times(10);

        $expected = new Dollar(50);
        $this->assertTrue($expected->equals($actual));
    }

    public function test_equality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertTrue((new Euro(5))->equals(new Euro(5)));
        $this->assertFalse((new Euro(5))->equals(new Dollar(5)));
    }
}
