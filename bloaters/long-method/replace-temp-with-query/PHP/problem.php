<?php

namespace PHP;

class Problem
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

    private function calculateTotal()
    {
        // Calculate Base Price
        $basePrice = $this->quantity * $this->itemPrice;

        if ($basePrice > 1000)
            return $basePrice * 0.95;
        else
            return $basePrice * 0.98;
    }
}
