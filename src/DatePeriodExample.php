<?php

declare(strict_types=1);

class DatePeriodExample
{
    public function test(): void
    {
        $start = new DateTimeImmutable('2025-08-18');
        $end = new DateTimeImmutable('2025-08-22');
        $interval = new DateInterval('P1D');

        $dp = new DatePeriod(
            $start,
            $interval,
            $end
        );

        foreach ($dp as $date) {

        }
    }
}
