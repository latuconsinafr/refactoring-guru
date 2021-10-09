import { Problem } from "./problem";
import { Solution } from "./solution";

class App {
  run(): void {
    let problem = new Problem();
    let solution = new Solution();

    problem.name = "Problem User";
    problem.amount = 2.5;
    problem.printResult();

    solution.name = "Solution User";
    solution.amount = 1.25;
    solution.printResult();
  }
}

let app = new App();
app.run();
