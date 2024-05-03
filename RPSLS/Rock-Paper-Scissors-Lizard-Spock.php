<?php

$elements = [
    "rock" => 1,
    "paper" => 2,
    "scissors" => 3,
    "lizard" => 4,
    "spock" => 5
];

// array for referencing win conditions
$strengths = [
    "rock" => [3, 4],
    "paper" => [1, 5],
    "scissors" => [2, 4],
    "lizard" => [2, 5],
    "spock" => [1, 3]
];

// User input
$guess = strtolower((string)readline("Pick your RPSLS choice: " . PHP_EOL));

if (!in_array($guess, array_keys($elements))) {
    echo "Invalid input." . PHP_EOL;
    exit;
}

$opponentelement = $elements[array_rand($elements)];

// win/draw/lose conditions
if (in_array($opponentelement, $strengths[$guess])) {
    echo "The player has won using $guess against " . array_search($opponentelement, $elements) . "." . PHP_EOL;
} elseif ($guess === array_search($opponentelement, $elements)) {
    echo "The player has drawn with the computer both using $guess." . PHP_EOL;
} else {
    echo "The player has lost using $guess against " . array_search($opponentelement, $elements) . "." . PHP_EOL;
}






