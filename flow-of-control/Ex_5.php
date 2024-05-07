<?php
// Exercise #5
// On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
// Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.

$keypad = strtoupper((string)readline("Enter a string: " . PHP_EOL));
if (!is_string($keypad)) {
    echo "Input error. Please enter a string" . PHP_EOL;
    exit;
}
$numberString = "";
for ($i = 0; $i < strlen($keypad); $i++) {
    $character = $keypad[$i];
    if ($character >= "A" && $character <= "C") {
        $numberString .= "2";
    } elseif ($character >= "D" && $character <= "F") {
        $numberString .= "3";
    } elseif ($character >= "G" && $character <= "I") {
        $numberString .= "4";
    } elseif ($character >= "J" && $character <= "L") {
        $numberString .= "5";
    } elseif ($character >= "M" && $character <= "O") {
        $numberString .= "6";
    } elseif ($character >= "P" && $character <= "S") {
        $numberString .= "7";
    } elseif ($character >= "T" && $character <= "V") {
        $numberString .= "8";
    } elseif ($character >= "W" && $character <= "Z") {
        $numberString .= "9";
    } else {
        echo "A character is none alphabetical" . PHP_EOL;
        exit;
    }
}
echo "The complete sequence is $numberString" . PHP_EOL;

$keypad = strtoupper((string)readline("Enter a string: " . PHP_EOL));
if (!is_string($keypad)) {
    echo "Input error. Please enter a string" . PHP_EOL;
    exit;
}
$numberString = "";
for ($i = 0; $i < strlen($keypad); $i++) {
    $character = $keypad[$i];
    switch ($character) {
        case "A":
        case "B":
        case "C":
            $numberString .= "2";
            break;
        case "D":
        case "E":
        case "F":
            $numberString .= "3";
            break;
        case "G":
        case "H":
        case "I":
            $numberString .= "4";
            break;
        case "J":
        case "K":
        case "L":
            $numberString .= "5";
            break;
        case "M":
        case "N":
        case "O":
            $numberString .= "6";
            break;
        case "P":
        case "Q":
        case "R":
        case "S":
            $numberString .= "7";
            break;
        case "T":
        case "U":
        case "V":
            $numberString .= "8";
            break;
        case "W":
        case "X":
        case "Y":
        case "Z":
            $numberString .= "9";
            break;
        default:
            echo "A character is none alphabetical" . PHP_EOL;
            exit;
    }
}
echo "The complete sequence is $numberString" . PHP_EOL;
