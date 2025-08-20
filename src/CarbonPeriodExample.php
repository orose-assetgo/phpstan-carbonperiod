<?php declare(strict_types=1);

class CarbonPeriodExample
{
    public function test(): void
    {
        $start = '2025-08-18';
        $end = '2025-08-22';
        $interval = 'P1D';

        $dp = new \Carbon\CarbonPeriod(
            $start,
            $interval,
            $end
        );

        foreach ($dp as $date) {

        }
    }
}
