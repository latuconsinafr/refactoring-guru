using System;

namespace CSharp
{
    public class Solution
    {
        public int Quantity { get; set; }
        public double ItemPrice { get; set; }

        public Solution()
        {
        }

        public void PrintTotal()
        {
            Console.WriteLine($"Total: {CalculateTotal()}");
        }

        private double CalculateTotal()
        {
            if (BasePrice() > 1000)
                return BasePrice() * 0.95;
            else
                return BasePrice() * 0.98;
        }

        private double BasePrice()
        {
            return Quantity * ItemPrice;
        }
    }
}
