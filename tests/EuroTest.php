<?php

declare(strict_types=1);

namespace Whycash\Tests;

use PHPUnit\Framework\TestCase;
use Whycash\Euro;

final class EuroTest extends TestCase
{
    public function test_times(): void
    {
        $five = new Euro(10);

        $this->assertEquals(new Euro(50), $five->times(5));
    }
}
