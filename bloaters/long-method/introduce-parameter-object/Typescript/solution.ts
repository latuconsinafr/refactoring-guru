import { DateRange } from "./dateRange";

export class Solution {
  public invoicedInDateRange!: DateRange;
  public receivedInDateRange!: DateRange;

  constructor() {}

  public printLogs(): void {
    this.invoicedIn();
    this.receivedIn();
  }

  private invoicedIn(): void {
    console.log(
      "The invoice duration is: ",
      this.invoicedInDateRange.totalDuration() / (1000 * 3600 * 24),
      " day(s)"
    );
  }

  private receivedIn(): void {
    console.log(
      "The receipt duration is: ",
      this.receivedInDateRange.totalDuration() / (1000 * 3600 * 24),
      " day(s)"
    );
  }
}
