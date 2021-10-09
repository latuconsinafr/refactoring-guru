using System;

namespace CSharp
{
    public class Solution
    {
        public string Name { get; set; }
        public double Amount { get; set; }

        public Solution()
        {
        }

        public void PrintResult()
        {
            PrintHeader();
            PrintDetails(GetAmountByLengthOfName());
        }

        private void PrintHeader()
        {
            Console.WriteLine("The result is:");
        }

        private void PrintDetails(double AmountByLengthOfName)
        {
            Console.WriteLine($"Name: {Name}");
            Console.WriteLine($"Amount by Length of Name: {AmountByLengthOfName}");
        }

        private double GetAmountByLengthOfName()
        {
            return Amount * Name.Length;
        }
    }
}
