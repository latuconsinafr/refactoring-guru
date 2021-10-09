<?php

namespace PHP;

use DateInterval;
use DateTime;

class Problem
{
    public $invoicedInStartDate;
    public $invoicedInEndDate;
    public $receivedInStartDate;
    public $receivedInEndDate;

    function __construct()
    {
    }

    public function printLogs(): void
    {
        $this->invoicedIn();
        $this->receivedIn();
    }

    private function invoicedIn(): void
    {
        echo "The invoice duration is: {$this->totalDuration($this->invoicedInStartDate,$this->invoicedInEndDate)->format('%R%a day(s)')}\n";
    }

    private function receivedIn(): void
    {
        echo "The receipt duration is: {$this->totalDuration($this->receivedInStartDate,$this->receivedInEndDate)->format('%R%a day(s)')}\n";
    }

    private function totalDuration(DateTime $startDate, DateTime $endDate): DateInterval
    {
        return $startDate->diff($endDate);
    }
}
