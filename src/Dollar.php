<?php

declare(strict_types=1);

namespace Whycash;

final class Dollar
{
    public float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function sum(float $amount): self
    {
        return new self($this->amount + $amount);
    }

    public function times(float $factor): self
    {
        return new self($this->amount * $factor);
    }
}
