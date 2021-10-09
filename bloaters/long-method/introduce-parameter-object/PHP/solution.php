<?php

namespace PHP;

class Solution
{
    public $invoicedInDateRange;
    public $receivedInDateRange;

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
        echo "The invoice duration is: {$this->invoicedInDateRange->totalDuration()->format('%R%a day(s)')}\n";
    }

    private function receivedIn(): void
    {
        echo "The receipt duration is: {$this->receivedInDateRange->totalDuration()->format('%R%a day(s)')}\n";
    }
}
