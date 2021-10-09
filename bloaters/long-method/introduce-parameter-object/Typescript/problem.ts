export class Problem {
  public invoicedInStartDate!: Date;
  public invoicedInEndDate!: Date;
  public receivedInStartDate!: Date;
  public receivedInEndDate!: Date;

  constructor() {}

  public printLogs(): void {
    this.invoicedIn();
    this.receivedIn();
  }

  private invoicedIn(): void {
    console.log(
      "The invoice duration is: ",
      this.totalDuration(this.invoicedInStartDate, this.invoicedInEndDate) /
        (1000 * 3600 * 24),
      " day(s)"
    );
  }

  private receivedIn(): void {
    console.log(
      "The receipt duration is: ",
      this.totalDuration(this.receivedInStartDate, this.receivedInEndDate) /
        (1000 * 3600 * 24),
      " day(s)"
    );
  }

  private totalDuration(startDate: Date, endDate: Date): number {
    return Math.abs(endDate.getTime() - startDate.getTime());
  }
}
