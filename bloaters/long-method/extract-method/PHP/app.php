<?php

namespace PHP;

include 'problem.php';
include 'solution.php';

class App
{
    function run()
    {
        $problem = new Problem();
        $solution = new Solution();

        $problem->name = "Problem User";
        $problem->amount = 2.5;
        $problem->printResult();

        $solution->name = "Solution User";
        $solution->amount = 1.25;
        $solution->printResult();
    }
}

$app = new App();
$app->run();
