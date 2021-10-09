<?php

namespace PHP;

class Problem
{
    public $name;
    public $amount;

    function __construct()
    {
    }

    function printResult(): void
    {
        $this->printHeader();

        // Print details
        echo "Name: {$this->name}\n";
        echo "Amount by Length of Name: {$this->getAmountByLengthOfName()}\n";
    }

    private function printHeader(): void
    {
        echo "The result is:\n";
    }

    private function getAmountByLengthOfName()
    {
        return $this->amount * strlen($this->name);
    }
}
