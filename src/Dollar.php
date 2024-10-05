<?php

declare(strict_types=1);

namespace Whycash;

final class Dollar
{
    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function multiply(int $factor): void
    {
        $this->amount *= $factor;
    }
}
