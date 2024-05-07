<?php
// Exercise #6
// Write a program to play a word-guessing game like Hangman.
// It must randomly choose a word from a list of words.
// It must stop when all the letters are guessed.
// It must give them limited tries and stop after they run out.
// It must display letters they have already guessed (either only the incorrect guesses or all guesses).

function displayBorder()
{
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n\n";
}

function displayWord($word, $guessedChar)
{
    $display = '';
    foreach (str_split($word) as $letter) {
        if (in_array($letter, $guessedChar)) {
            $display .= $letter . ' ';
        } else {
            $display .= '_ ';
        }
    }
    return $display;
}

function playGame($word, $numOfTries)
{
    $guessedChar = [];
    $wrongGuess = [];

    while ($numOfTries > 0) {

        displayBorder();

        echo "Word:\t" . displayWord($word, $guessedChar) . "\n\n";
        echo "Misses:\t" . implode('', $wrongGuess) . "\n\n";

        $guess = strtolower(readline("Guess: "));

        if (strlen($guess) !== 1 || !ctype_alpha($guess)) {
            echo "Please enter a single letter." . PHP_EOL;
            continue;
        }

        if (in_array($guess, $guessedChar) || in_array($guess, $wrongGuess)) {
            echo "You've already guessed that letter." . PHP_EOL;
            continue;
        }

        if (strpos($word, $guess) !== false) {
            $guessedChar[] = $guess;
            if (count(array_unique(str_split($word))) === count($guessedChar)) {
                displayBorder();
                echo "Word:\t" . displayWord($word, $guessedChar) . "\n";
                echo "Misses:\t" . implode('', $wrongGuess) . "\n\n";
                echo "YOU GOT IT!\n";
                return;
            }
        } else {
            $wrongGuess[] = $guess;
            $numOfTries--;
            if ($numOfTries === 0) {
                displayBorder();
                echo "Word:\t" . $word . "\n";
                echo "Misses:\t" . implode('', $wrongGuess) . "\n\n";
                echo "You are out of guesses. The word was '{$word}'.\n";
                return;
            }
        }
    }
}


$numOfTries = 5;
$words = ["leviathan", "codelex", "vacation", "environment", "labyrinth", "academy", "cat"];

while (true) {
    $word = $words[array_rand($words)];
    playGame($word, $numOfTries);

    $validInput = false;
    while ($validInput === false) {
        $playAgain = strtolower(readline("Play \"again\" or \"quit\"? "));

        if ($playAgain === 'quit') {
            break 2;
        } elseif ($playAgain === 'again') {
            $validInput = true;
        } else {
            echo "Invalid input." . PHP_EOL;
        }
    }
}