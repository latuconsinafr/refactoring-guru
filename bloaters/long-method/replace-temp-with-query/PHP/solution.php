<?php

namespace PHP;

class Solution
{
    public $quantity;
    public $itemPrice;

    function __construct()
    {
    }

    function printTotal(): void
    {
        echo "Total: {$this->calculateTotal()}\n";
    }

    private function calculateTotal(): float
    {
        if ($this->basePrice() > 1000)
            return $this->basePrice() * 0.95;
        else
            return $this->basePrice() * 0.98;
    }

    private function basePrice(): float
    {
        return $this->quantity * $this->itemPrice;
    }
}
