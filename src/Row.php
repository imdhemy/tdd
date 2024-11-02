<?php

declare(strict_types=1);

namespace Whycash;

final readonly class Row
{
    public function __construct(
        public string $instrument,
        public int $shares,
        public Money $price,
    ) {
    }

    public function total(): Money
    {
        return new Money($this->shares * $this->price->amount);
    }
}
