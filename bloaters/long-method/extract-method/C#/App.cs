using System;

namespace CSharp
{
    class App
    {
        static void Main(string[] args)
        {
            Problem problem = new Problem();
            Solution solution = new Solution();

            problem.Name = "Problem User";
            problem.Amount = 2.5;
            problem.PrintResult();

            solution.Name = "Solution User";
            solution.Amount = 1.25;
            solution.PrintResult();
        }
    }
}
