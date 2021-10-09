export class DateRange {
  private _startDate: Date;
  private _endDate: Date;

  constructor(start: Date, end: Date) {
    this._startDate = start;
    this._endDate = end;
  }

  public get startDate(): Date {
    return this._startDate;
  }

  public get endDate(): Date {
    return this._endDate;
  }

  public totalDuration(): number {
    return Math.abs(this._endDate.getTime() - this._startDate.getTime());
  }
}
