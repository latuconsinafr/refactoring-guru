using System;

namespace CSharp
{
    public class Problem
    {
        public string Name { get; set; }
        public double Amount { get; set; }

        public Problem()
        {
        }

        public void PrintResult()
        {
            PrintHeader();

            // Print Details
            Console.WriteLine($"Name: {Name}");
            Console.WriteLine($"Amount by Length of Name: {GetAmountByLengthOfName()}");
        }

        private void PrintHeader()
        {
            Console.WriteLine("The result is:");
        }

        private double GetAmountByLengthOfName()
        {
            return Amount * Name.Length;
        }
    }
}
