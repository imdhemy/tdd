<?php

declare(strict_types=1);

namespace Whycash\Tests;

use PHPUnit\Framework\TestCase;
use Whycash\Dollar;

final class DollarTest extends TestCase
{
    public function test_sum(): void
    {
        $five = new Dollar(5);

        $actual = $five->sum(3.5);

        $this->assertEquals(8.5, $actual->amount);
    }

    public function test_times(): void
    {
        $five = new Dollar(10);

        $actual = $five->times(0.5);

        $this->assertEquals(5, $actual->amount);
    }

    public function test_equals(): void
    {
        $five = new Dollar(5);

        $actual = $five->equals(new Dollar(5));

        $this->assertTrue($actual);
    }


    public function test_not_equals(): void
    {
        $five = new Dollar(5);

        $actual = $five->equals(new Dollar(3));

        $this->assertFalse($actual);
    }
}
