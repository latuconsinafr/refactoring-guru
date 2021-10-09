using System;

namespace CSharp
{
    public class Problem
    {
        public DateTime InvoicedInStartDate { get; set; }
        public DateTime InvoicedInEndDate { get; set; }
        public DateTime ReceivedInStartDate { get; set; }
        public DateTime ReceivedInEndDate { get; set; }

        public Problem()
        {
        }

        public void PrintLogs()
        {
            InvoicedIn();
            ReceivedIn();
        }

        private void InvoicedIn()
        {
            Console.WriteLine($"The invoice duration is: {TotalDuration(InvoicedInStartDate, InvoicedInEndDate).TotalDays} day(s)");
        }

        private void ReceivedIn()
        {
            Console.WriteLine($"The receipt duration is: {TotalDuration(ReceivedInStartDate, ReceivedInEndDate).TotalDays} day(s)");
        }

        private TimeSpan TotalDuration(DateTime start, DateTime end)
        {
            return end - start;
        }
    }
}
