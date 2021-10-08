# refactoring-guru

This repository contains the refactoring-guru lesson available in [here](https://refactoring.guru/)

## When to refactor

1. When you’re doing something for the first time, just get it done.
2. When you’re doing something similar for the second time, cringe at having to repeat but do the same thing anyway.
3. When you’re doing something for the third time, start refactoring.
4. When adding a feature.
5. When fixing a bug.
6. During a code review.

## How to refactor

1. The code should become cleaner, focus on refactoring with small changes.
2. New functionality shouldn't be created during refactoring.
3. All existing tests must pass after refactoring.
4. When you’re doing something for the third time, start refactoring.
5. When adding a feature.
6. When fixing a bug.
7. During a code review.

## Code smells

* Bloaters
    * Long Method
      * Sign and Symptoms: A method contains too many lines of code. Generally, any method longer than ten lines should make you start asking questions.
      * Reasons for the Problem: Mentally, it’s often harder to create a new method than to add to an existing one.
      * Treatment: As a rule of thumb, if you feel the need to comment on something inside a method, you should take this code and put it in a new method.
         * To reduce the length of a method body, use [Extract Method]().
         * If local variables and parameters interfere with extracting a method, use [Replace Temp with Query](), [Introduce Parameter Object]() or [Preserve Whole Object]().
         * If none of the previous recipes help, try moving the entire method to a separate object via [Replace Method with Method Object]().
         * Conditional operators and loops are a good clue that code can be moved to a separate method. For conditionals, use [Decompose Conditional](). If loops are in the way, try [Extract Method]().
      * Payoff: Classes with short methods live longest. In addition, long methods offer the perfect hiding place for unwanted duplicate code.
      * Performance: In almost all cases the impact is so negligible that it’s not even worth worrying about.
    * Large Class
    * Primitive Obsession
    * Long Parameter List
    * Data Clumps 
* Object-Orientation Abusers
    * Alternative Classes with Different Interfaces
    * Refused Bequest
    * Switch Statements
    * Temporary Field 
* Change Preventers
    * Divergent Change
    * Parallel Inheritance Hierarchies
    * Shotgun Surgery
* Dispensables
    * Comments
    * Duplicate Code
    * Data Class
    * Dead Code
    * Lazy Class
    * Speculative Generality 
* Couplers
    * Feature Envy
    * Inappropriate Intimacy
    * Incomplete Library Class
    * Message Chains
    * Middle Man 
