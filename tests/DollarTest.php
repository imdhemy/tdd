<?php

declare(strict_types=1);

namespace Whycash\Tests;

use PHPUnit\Framework\TestCase;
use Whycash\Dollar;

final class DollarTest extends TestCase
{
    public function test_multiply(): void
    {
        $five = new Dollar(5);

        $five->multiply(3);

        $this->assertEquals(15, $five->amount);
    }

    public function test_multiply_with_4(): void
    {
        $four = new Dollar(4);

        $four->multiply(3);

        $this->assertEquals(12, $four->amount);
    }

    public function test_sum(): void
    {
        $five = new Dollar(5);
        $four = new Dollar(4);

        $actual = $four->sum($five);

        $this->assertEquals(9, $actual->amount);
    }
}
