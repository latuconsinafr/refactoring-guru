# Bloaters

This folder contains all the Code smells with Bloaters Category

## Long Method

1. Sign and Symptoms: A method contains too many lines of code. Generally, any method longer than ten lines should make you start asking questions.
2. Reasons for the Problem: Mentally, it’s often harder to create a new method than to add to an existing one.
3. Treatment: As a rule of thumb, if you feel the need to comment on something inside a method, you should take this code and put it in a new method.
    * To reduce the length of a method body, use [Extract Method](https://github.com/latuconsinafr/refactoring-guru/tree/main/bloaters/long-method/extract-method).
    * If local variables and parameters interfere with extracting a method, use [Replace Temp with Query](), [Introduce Parameter Object]() or [Preserve Whole Object]().
    * If none of the previous recipes help, try moving the entire method to a separate object via [Replace Method with Method Object]().
    * Conditional operators and loops are a good clue that code can be moved to a separate method. For conditionals, use [Decompose Conditional](). If loops are in the way, try [Extract Method](https://github.com/latuconsinafr/refactoring-guru/tree/main/bloaters/long-method/extract-method).
4. Payoff: Classes with short methods live longest. In addition, long methods offer the perfect hiding place for unwanted duplicate code.
5. Performance: In almost all cases the impact is so negligible that it’s not even worth worrying about.

## Large Class

## Primitive Obsession

## Long Parameter List

## Data Clumps
