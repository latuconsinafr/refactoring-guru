export class Solution {
  public name!: string;
  public amount!: number;

  constructor() {}

  public printResult(): void {
    this.printHeader();
    this.printDetails(this.getAmountByLengthOfName());
  }

  private printHeader(): void {
    console.log("The result is:");
  }

  private printDetails(amountByLengthOfName: number): void {
    console.log("Name: ", this.name);
    console.log("Amount by Length of Name: ", amountByLengthOfName);
  }

  private getAmountByLengthOfName(): number {
    return this.amount * this.name.length;
  }
}
