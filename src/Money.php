<?php

declare(strict_types=1);

namespace Whycash;

final readonly class Money
{
    public function __construct(public int $amount)
    {
    }

    public static function dollar(int $amount): self
    {
        return new self($amount);
    }

    public function sum(Money $addend): Money
    {
        return new self($this->amount + $addend->amount);
    }
}

// 3 + 4
