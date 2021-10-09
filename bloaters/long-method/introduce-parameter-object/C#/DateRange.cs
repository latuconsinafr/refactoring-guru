using System;

namespace CSharp
{
    public class DateRange
    {
        public DateTime StartDate { get; }
        public DateTime EndDate { get; }

        public DateRange(DateTime start, DateTime end)
        {
            StartDate = start;
            EndDate = end;
        }

        public TimeSpan TotalDuration()
        {
            return EndDate - StartDate;
        }
    }
}
