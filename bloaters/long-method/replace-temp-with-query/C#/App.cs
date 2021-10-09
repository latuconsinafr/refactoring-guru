using System;

namespace CSharp
{
    class App
    {
        static void Main(string[] args)
        {
            Problem problem = new Problem();
            Solution solution = new Solution();

            problem.Quantity = 50;
            problem.ItemPrice = 20.00;
            problem.PrintTotal();

            solution.Quantity = 100;
            solution.ItemPrice = 15.00;
            solution.PrintTotal();
        }
    }
}
