<?php

namespace PHP;

use DateTime;

include 'dateRange.php';
include 'problem.php';
include 'solution.php';

class App
{
    public function run(): void
    {
        $problem = new Problem();
        $solution = new Solution();

        $problem->invoicedInStartDate = new DateTime('2021-09-29');
        $problem->invoicedInEndDate = new DateTime('2021-10-13');
        $problem->receivedInStartDate = new DateTime('2021-09-20');
        $problem->receivedInEndDate = new DateTime('2021-10-01');
        $problem->printLogs();

        $solution->invoicedInDateRange = new DateRange(new DateTime('2021-09-29'), new DateTime('2021-10-13'));
        $solution->receivedInDateRange = new DateRange(new DateTime('2021-09-20'), new DateTime('2021-10-01'));
        $solution->printLogs();
    }
}

$app = new App();
$app->run();
