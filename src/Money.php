<?php

declare(strict_types=1);

namespace Whycash;

class Money
{
    protected int $amount;
    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    // static factory method
    public static function dollar(int $amount): self
    {
        return new self($amount, "USD");
    }
    
    // static factory method
    public static function euro(int $amount): self
    {
        return new self($amount, "EUR");
    }

    public function times(int $factor): Money
    {
        return new Money($this->amount * $factor, $this->currency);
    }

    public function equals(Money $other): bool
    {
        if ($this->currency !== $other->currency) {
            return false;
        }

        return $this->amount === $other->amount;
    }
}
