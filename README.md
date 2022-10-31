# Find Final Position Of Ball

### Find the task details below

**Objective** : Write a program to find a position of ball is directed to move within a square matrix.

**Details** : A ball is directed to move within a square matrix. It accepts a sequence of commands to
move in any of the four directions from each call [UP,DOWN,LEFT or RIGHT]. the ball starts form
cal0. and may not move diagonally or outside of the boundary.
Each cell in the matrix has a position equal to

> (row*size)+column

Where 
**row** and **column** are zero-indexed,
**size** = row length of the matrix.

Return the final position of the move ball after all moves.

###### Example starts here:

size=4, row=0, column=0
commands=[RIGHT,UP,DOWN,LEFT,DOWN,DOWN]
The ball path is shown below

0  1  2  3
4  5  6  7
8  9  10 11
12 13 14 15

RIGHT: ball move to position 1
UP: position unchanged
DOWN: ball move to position 5
LEFT: ball move to position 4
DOWN: ball move to position 8
DOWN: ball move to position 12

The function return 12

###### Example ends here.
