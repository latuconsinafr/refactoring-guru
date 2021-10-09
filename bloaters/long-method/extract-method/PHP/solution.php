<?php

namespace PHP;

class Solution
{
    public $name;
    public $amount;

    function __construct()
    {
    }

    public function printResult(): void
    {
        $this->printHeader();
        $this->printDetails($this->getAmountByLengthOfName());
    }

    private function printHeader(): void
    {
        echo "The result is:\n";
    }

    private function printDetails(float $amountByLengthOfName): void
    {
        echo "Name: {$this->name}\n";
        echo "Amount by Length of Name: {$amountByLengthOfName}\n";
    }

    private function getAmountByLengthOfName() : float
    {
        return $this->amount * strlen($this->name);
    }
}
