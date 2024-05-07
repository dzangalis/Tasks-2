<?php
// Exercise #1
// Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

$numberOne = (int)readline("Input intager one: " . PHP_EOL);
$numberTwo = (int)readline("Input intager two: " . PHP_EOL);

if ($numberOne == 15 || $numberTwo == 15) {
    echo "True" . PHP_EOL;
} elseif ($numberOne + $numberTwo == 15 || $numberOne - $numberTwo == 15 || $numberTwo - $numberOne == 15) {
    echo "True" . PHP_EOL;
} else {
    echo "False" . PHP_EOL;
}

// Exercise #2
// Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise. The program shall always print “bye!” before exiting.

$number = 5;

if ($number % 2 == 0) {
    echo "Even number" . PHP_EOL;
} else {
    echo "Odd number" . PHP_EOL;
}
echo "Bye!" . PHP_EOL;

// Exercise #3
// Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily. Also compute and display the average. The output shall look like:
// The sum of 1 to 100 is 5050
// The average is 50.5

$lower_bound = 1;
$upper_bound = 100;

$bounds = range($lower_bound, $upper_bound);
$sum = 0;

for ($i = 0; $i < count($bounds); $i++) {
    $sum += $bounds[$i];
}

$amount = count($bounds);
$average = $sum / $amount;

echo "The sum of $lower_bound to $upper_bound is $sum" . PHP_EOL;
echo "The average is $average" . PHP_EOL;

// Exercise #4
// Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is the same as factorial of N.

$factorial = 1;

for ($i = 1; $i <= 10; $i++) {
    $factorial *= $i;
}

echo "A factorial from 1 to 10 is $factorial" . PHP_EOL;

// Exercise #5
// Write a program that picks a random number from 1-100. Give the user a chance to guess it. If they get it right, tell them so. If their guess is higher than the number, say "Too high." If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)
echo "I'm thinking of a number between 1-100.  Try to guess it." . PHP_EOL;
$input = (int)readline("> ");
$randome = rand(1, 100);

echo PHP_EOL;

if ($input === $randome) {
    echo "You guessed it!  What are the odds?!?" . PHP_EOL;
} elseif ($input < $randome) {
    echo "Sorry, you are too low.  I was thinking of $randome." . PHP_EOL;
} elseif ($input > $randome) {
    echo "Sorry, you are too high.  I was thinking of $randome." . PHP_EOL;
} else {
    echo "Something is broken." . PHP_EOL;
}
