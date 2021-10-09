export class Solution {
  public name!: string;
  public amount!: number;

  constructor() {}

  public printResult() {
    this.printHeader();
    this.printDetails();
  }

  private printHeader() {
    console.log("The result is:");
  }

  private printDetails() {
    console.log("Name: ", this.name);
    console.log("Amount by Length of Name: ", this.getAmountByLengthOfName());
  }

  private getAmountByLengthOfName(): number {
    return this.amount * this.name.length;
  }
}
