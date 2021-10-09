using System;

namespace CSharp
{
    class App
    {
        static void Main(string[] args)
        {
            Problem problem = new Problem();
            Solution solution = new Solution();

            problem.InvoicedInStartDate = new(2021, 09, 29);
            problem.InvoicedInEndDate = new(2021, 10, 13);
            problem.ReceivedInStartDate = new(2021, 09, 20);
            problem.ReceivedInEndDate = new(2021, 10, 01);
            problem.PrintLogs();

            solution.InvoicedInDateRange = new(new(2021, 09, 29), new(2021, 10, 13));
            solution.ReceivedInDateRange = new(new(2021, 09, 20), new(2021, 10, 01));
            solution.PrintLogs();
        }
    }
}
