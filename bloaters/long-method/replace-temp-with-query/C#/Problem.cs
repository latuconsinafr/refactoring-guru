using System;

namespace CSharp
{
    public class Problem
    {
        public int Quantity { get; set; }
        public double ItemPrice { get; set; }

        public Problem()
        {
        }

        public void PrintTotal()
        {
            Console.WriteLine($"Total: {CalculateTotal()}");
        }
        
        private double CalculateTotal()
        {
            // Calculate Base Price
            double basePrice = Quantity * ItemPrice;

            if (basePrice > 1000)
                return basePrice * 0.95;
            else
                return basePrice * 0.98;
        }
    }
}
