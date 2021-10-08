<?php

namespace PHP;

class Solution
{
    public $name;
    public $amount;

    function __construct()
    {
    }

    function printResult()
    {
        $this->printHeader();
        $this->printDetails();
    }

    private function printHeader()
    {
        echo "The result is:\n";
    }

    private function printDetails()
    {
        echo "Name: {$this->name}\n";
        echo "Amount by Length of Name: {$this->getAmountByLengthOfName()}\n";
    }

    private function getAmountByLengthOfName()
    {
        return $this->amount * strlen($this->name);
    }
}