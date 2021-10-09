import { Problem } from "./problem";
import { Solution } from "./solution";

class App {
  run(): void {
    let problem = new Problem();
    let solution = new Solution();

    problem.quantity = 50;
    problem.itemPrice = 20.00;
    problem.printTotal();

    solution.quantity = 100;
    solution.itemPrice = 15.00;
    solution.printTotal();
  }
}

let app = new App();
app.run();
