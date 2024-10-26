<?php

declare(strict_types=1);

namespace Whycash;

class Money
{
    protected int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $factor): Money
    {
        return new Money($this->amount * $factor);
    }

    public function equals(Money $other): bool
    {
        return $this->amount === $other->amount;
    }
}
