<?php
// Exercise #1

echo "Input the 1st number: ";
$numberOne = (int)readline();

echo "Input the 2nd number: ";
$numberTwo = (int)readline();

echo "Input the 3rd number: ";
$numberThree = (int)readline();

//todo print the largest number

$largest = max($numberOne, $numberTwo, $numberThree);
echo "The largest number out of the three was $largest." . PHP_EOL;

// Exercise #2

echo "Enter the number.";
$numberSign = (int)readline();

//todo print if number is positive or negative
if ($numberSign > 0) {
    echo "The number is positive." . PHP_EOL;
} elseif ($numberSign < 0) {
    echo "The number is negative." . PHP_EOL;
} else {
    echo "The number is zero." . PHP_EOL;
}

// Exercise #3
// Write a program that reads an positive integer and count the number of digits the number has.

$positiveInt = (int)readline("Enter a positive intager!: ");

if ($positiveInt > 0) {
    $count = strlen($positiveInt);
    echo "The intager contains $count digits." . PHP_EOL;
} else {
    echo "The intager is not positive." . PHP_EOL;
}
// Exercise #4
// Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".

$weekday = (int)readline("Enter a number for a week day (from 0-6): ");

if ($weekday >= 0 && $weekday <= 6) {
    if ($weekday === 0) {
        echo "Sunday" . PHP_EOL;
    } elseif ($weekday === 1) {
        echo "Monday" . PHP_EOL;
    } elseif ($weekday === 2) {
        echo "Tuesday" . PHP_EOL;
    } elseif ($weekday === 3) {
        echo "Wednesday" . PHP_EOL;
    } elseif ($weekday === 4) {
        echo "Thursday" . PHP_EOL;
    } elseif ($weekday === 5) {
        echo "Friday" . PHP_EOL;
    } else {
        echo "Saturday" . PHP_EOL;
    }
} else {
    echo "Not a valid day" . PHP_EOL;
}

$weekday = (int)readline("Enter a number for a week day (from 0-6): ");

switch ($weekday) {
    case 0:
        echo "Sunday" . PHP_EOL;
        break;
    case 1:
        echo "Monday" . PHP_EOL;
        break;
    case 2:
        echo "Tuesday" . PHP_EOL;
        break;
    case 3:
        echo "Wednesday" . PHP_EOL;
        break;
    case 4:
        echo "Thursday" . PHP_EOL;
        break;
    case 5:
        echo "Friday" . PHP_EOL;
        break;
    case 6:
        echo "Saturday" . PHP_EOL;
        break;
    default:
        echo "Not a valid day" . PHP_EOL;
        break;
}