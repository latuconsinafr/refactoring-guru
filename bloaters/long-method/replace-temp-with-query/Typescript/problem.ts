export class Problem {
  public quantity!: number;
  public itemPrice!: number;

  constructor() {}

  public printTotal(): void {
    console.log("Total: ", this.calculateTotal());
  }

  private calculateTotal(): number {
    // Calculate Base Price
    let basePrice = this.quantity * this.itemPrice;

    if (basePrice > 1000) return basePrice * 0.95;
    else return basePrice * 0.98;
  }
}
