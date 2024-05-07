<?php
// Exercise 1
// write a program that displays first 10 natural numbers

echo "The first 10 natural numbers are:" . PHP_EOL;

for ($i = 1; $i < 11; $i++) {
    echo $i . PHP_EOL;
}

// Exercise 2
// complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

echo "Input number of terms: " . PHP_EOL;

$i = (int)readline("Input the number which you'd like to be multiplied: " . PHP_EOL);
$n = (int)readline("Input times you'd like the number to multiply itself: " . PHP_EOL);

if (empty($i) || empty($n) || $n < 0) {
    echo "invalid values." . PHP_EOL;
    exit;
}

$pow = $i;

for ($a = 1; $a < $n; $a++) {
    $pow *= $i;
}

echo "The given number $i brought to $n power is $pow." . PHP_EOL;

// Exercise 3
//Write a program that asks the user to enter two words. The program then prints out both words on one line. The words will be separated by enough dots so that the total line length is 30:

function printdots(string $one, string $two)
{
    $linelimit = 30;
    $totallength = strlen($one) + strlen($two);
    $dotcount = $linelimit - $totallength;

    echo "$one";
    for ($i = 0; $i < $dotcount; $i++) {
        echo ".";
    }
    echo "$two" . PHP_EOL;
}

$wordone = (string)readline("Enter first word: " . PHP_EOL);
$wordtwo = (string)readline("Enter second word: " . PHP_EOL);

if (empty($wordone) || empty($wordtwo)) {
    echo "invalid values." . PHP_EOL;
    exit;
}

printdots($wordone, $wordtwo);

// Exercise 4?
// Write a console program in a class named FizzBuzz that prompts the user for an integer, then prints all of the numbers from one to that integer, separated by spaces.
// Use a loop to print the numbers.
// But for multiples of three, print "Fizz" instead of the number, and for the multiples of five print "Buzz".
// For numbers which are multiples of both three and five print "FizzBuzz".
// Drop to a new line after print each 20 numbers. If the user typed 100, the output would be:
class FizzBuzz
{
    function fizz()
    {
        $upperlimit = (int)readline("Max value? ");

        for ($i = 1; $i < $upperlimit + 1; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 === 0) {
                echo "Fizz ";
            } elseif ($i % 5 === 0) {
                echo "Buzz ";
            } else {
                echo "$i ";
            }
            if ($i % 20 === 0) {
                echo "\n";
            }
        }
    }
}

$fizzbuzz = new FizzBuzz();
$fizzbuzz->fizz();

// Exercise 5
// Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based on the game "Pig").
// The player's goal is to accumulate as many points as possible without rolling a 1. Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0.
// Otherwise, they add this number to their running total score. The player then chooses whether to roll again, or end the game with their current point total.

class Piglet
{
    private static $totalScore = 0;

    public static function roll()
    {
        return rand(1, 6);
    }

    public static function pig()
    {
        echo "\nWelcome to piglet!" . PHP_EOL;
        while (true) {
            $roll = self::roll();
            echo "You rolled a $roll!" . PHP_EOL;
            if ($roll === 1) {
                echo "You got 0 points." . PHP_EOL;
                break;
            } else {
                self::$totalScore += $roll;
                echo "Roll again? ";
                $response = trim(fgets(STDIN)); //trims leaving only the first char
                if (strtolower($response) !== 'y') {
                    echo "You got " . self::$totalScore . " points." . PHP_EOL;
                    break;
                }
            }
        }
    }
}

Piglet::pig();