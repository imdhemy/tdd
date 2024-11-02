<?php

declare(strict_types=1);

namespace Whycash;

final class Report
{
    private array $rows;

    public function total(): Money
    {
        $result = Money::dollar(0);

        foreach ($this->rows as $row) {
            $result = $result->sum($row->total());
        }

        return $result;
    }

    // @todo: improve typing
    public function addRows(array $rows): void
    {
        $this->rows = $rows;
    }
}
