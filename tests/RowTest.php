<?php

declare(strict_types=1);

namespace Whycash\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Whycash\Money;
use Whycash\Row;

class RowTest extends TestCase
{
    #[Test]
    public function total(): void
    {
        $row = new Row('IBM', 1000, Money::dollar(25));

        $actual = $row->total();

        $expected = Money::dollar(25000);
        $this->assertEquals($expected, $actual);
    }
}
