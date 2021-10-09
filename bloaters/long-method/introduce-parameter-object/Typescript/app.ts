import { DateRange } from "./dateRange";
import { Problem } from "./problem";
import { Solution } from "./solution";

class App {
  run(): void {
    let problem = new Problem();
    let solution = new Solution();

    problem.invoicedInStartDate = new Date("09/29/2021");
    problem.invoicedInEndDate = new Date("10/13/2021");
    problem.receivedInStartDate = new Date("09/20/2021");
    problem.receivedInEndDate = new Date("10/01/2021");
    problem.printLogs();

    solution.invoicedInDateRange = new DateRange(
      new Date("09/29/2021"),
      new Date("10/13/2021")
    );
    solution.receivedInDateRange = new DateRange(
      new Date("09/20/2021"),
      new Date("10/01/2021")
    );
    solution.printLogs();
  }
}

let app = new App();
app.run();
