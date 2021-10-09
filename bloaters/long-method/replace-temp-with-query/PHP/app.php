<?php

namespace PHP;

include 'problem.php';
include 'solution.php';

class App
{
    function run(): void
    {
        $problem = new Problem();
        $solution = new Solution();

        $problem->quantity = 50;
        $problem->itemPrice = 20.00;
        $problem->printTotal();

        $solution->quantity = 100;
        $solution->itemPrice = 15.00;
        $solution->printTotal();
    }
}

$app = new App();
$app->run();
