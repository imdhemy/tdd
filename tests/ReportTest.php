<?php

declare(strict_types=1);

namespace Whycash\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Whycash\Money;
use Whycash\Report;
use Whycash\Row;

final class ReportTest extends TestCase
{
    #[Test]
    public function simple_report(): void
    {
        $sut = new Report();
        $rows = [
            new Row("IBM", 1000, Money::dollar(25)),
            new Row("GE", 400, Money::dollar(100)),
            new Row("GE", 1, Money::dollar(100)),
        ];
        $sut->addRows($rows);

        $actual = $sut->total();

        $expected = Money::dollar(65100);
        $this->assertEquals($expected, $actual);
    }

    #[Test]
    public function complex_report(): void
    {
    }
}
