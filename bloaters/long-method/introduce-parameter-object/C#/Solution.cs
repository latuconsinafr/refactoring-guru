using System;

namespace CSharp
{
    public class Solution
    {
        public DateRange InvoicedInDateRange { get; set; }
        public DateRange ReceivedInDateRange { get; set; }

        public Solution()
        {
        }

        public void PrintLogs()
        {
            InvoicedIn();
            ReceivedIn();
        }

        private void InvoicedIn()
        {
            Console.WriteLine($"The invoice duration is: {InvoicedInDateRange.TotalDuration().TotalDays} day(s)");
        }

        private void ReceivedIn()
        {
            Console.WriteLine($"The receipt duration is: {ReceivedInDateRange.TotalDuration().TotalDays} day(s)");
        }
    }
}
