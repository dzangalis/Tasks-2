<?php
// Exercise 6
// Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.

class AsciiFigure
{
    public static function draw($size)
    {
        for ($i = 0; $i < $size; $i++) {
            $forwardSlash = str_repeat("/", 4 * ($size - $i - 1));
            $stars = str_repeat("*", 8 * $i);
            $backwardSlashes = str_repeat("\\", 4 * ($size - $i - 1));
            echo $forwardSlash . $stars . $backwardSlashes . PHP_EOL;
        }
    }
}

$size = (int)readline("Enter the size of the figure: ");
if (empty($size) || $size < 0) {
    echo "Invalid values." . PHP_EOL;
    exit;
}
AsciiFigure::draw($size);


// Exercise 7
// Write a console program in a class named RollTwoDice that prompts the user for a desired sum, then repeatedly rolls two six-sided dice (using a Random object to generate random numbers from 1-6) until the sum of the two dice values is the desired sum.
class RollTwoDice
{
    public static function rollTillSum($desiredSum)
    {

        while (true) {
            $random = rand(1, 6);
            $random2 = rand(1, 6);
            $sum = $random + $random2;
            echo "$random and $random2 = $sum" . PHP_EOL;
            if ($sum == $desiredSum) {
                break;
            }
        }
    }
}

$desiredSum = (int)readline("Desired sum: ");
if (empty($desiredSum) || $desiredSum < 0) {
    echo "Invalid values." . PHP_EOL;
    exit;
}
RollTwoDice::rollTillSum($desiredSum);

// Exercise 8
// Write a console program in a class named NumberSquare that prompts the user for two integers, a min and a max, and prints the numbers in the range from min to max inclusive in a square pattern.
// Each line of the square consists of a wrapping sequence of integers increasing from min and max. The first line begins with min, the second line begins with min + 1, and so on.
// When the sequence in any line reaches max, it wraps around back to min. You may assume that min is less than or equal to max

class NumberSquare
{
    public static function printSquare($min, $max)
    {
        $size = $max - $min + 1;
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                echo($min + ($i + $j) % $size);
            }
            echo PHP_EOL;
        }
    }
}

$min = (int)readline("Min? ");
$max = (int)readline("Max? ");
if (empty($min) || $min < 0 || empty($max) || $max < 0 || $max < $min) {
    echo "Invalid values." . PHP_EOL;
    exit;
}

NumberSquare::printSquare($min, $max);