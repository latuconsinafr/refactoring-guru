export class Problem {
  public name!: string;
  public amount!: number;

  constructor() {}

  public printResult() {
    this.printHeader();

    // Print details
    console.log("Name: ", this.name);
    console.log("Amount by Length of Name: ", this.getAmountByLengthOfName());
  }

  private printHeader() {
    console.log("The result is:");
  }

  private getAmountByLengthOfName(): number {
    return this.amount * this.name.length;
  }
}
