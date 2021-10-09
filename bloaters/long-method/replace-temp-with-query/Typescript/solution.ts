export class Solution {
  public quantity!: number;
  public itemPrice!: number;

  constructor() {}

  public printTotal(): void {
    console.log("Total: ", this.calculateTotal());
  }

  private calculateTotal(): number {
    if (this.basePrice() > 1000) return this.basePrice() * 0.95;
    else return this.basePrice() * 0.98;
  }

  private basePrice(): number {
    return this.quantity * this.itemPrice;
  }
}
