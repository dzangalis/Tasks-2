<?php
// Exercise 5
// Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.
function display_board($gameBoard)
{
    echo " {$gameBoard[0][0]} | {$gameBoard[0][1]} | {$gameBoard[0][2]} \n";
    echo "---+---+---\n";
    echo " {$gameBoard[1][0]} | {$gameBoard[1][1]} | {$gameBoard[1][2]} \n";
    echo "---+---+---\n";
    echo " {$gameBoard[2][0]} | {$gameBoard[2][1]} | {$gameBoard[2][2]}  \n";
}

class TicTacToe
{
    public static function makeAMove(&$gameBoard, $row, $column, $turn)
    {
        if (self::isValidMove($row, $column) && $gameBoard[$row][$column] == ' ') {
            $gameBoard[$row][$column] = $turn;
            return true;
        }
        return false;
    }

    public static function draw($gameBoard)
    {
        foreach ($gameBoard as $rows) {
            foreach ($rows as $spaces) {
                if ($spaces == ' ') {
                    return false;
                }
            }
        }
        return true;
    }

    public static function winner($gameBoard, $symbol)
    {
        // column and rows
        for ($i = 0; $i < 3; $i++) {
            if ($gameBoard[$i][0] == $symbol && $gameBoard[$i][1] == $symbol && $gameBoard[$i][2] == $symbol) {
                return true;
            }
            if ($gameBoard[0][$i] == $symbol && $gameBoard[1][$i] == $symbol && $gameBoard[2][$i] == $symbol) {
                return true;
            }
        }
        // diagonals
        if (($gameBoard[0][0] == $symbol && $gameBoard[1][1] == $symbol && $gameBoard[2][2] == $symbol) || ($gameBoard[0][2] == $symbol && $gameBoard[1][1] == $symbol && $gameBoard[2][0] == $symbol)) {
            return true;
        }
        return false;
    }


    public static function isValidMove($row, $column)
    {
        return $row >= 0 && $row < 3 && $column >= 0 && $column < 3;
    }
}


$gameBoard = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' ']
];

display_board($gameBoard);
$playersTurn = "X";
while (true) {
    $move = readline("'$playersTurn', choose your location (row, column): " . PHP_EOL);
    $row = intval($move[0]);
    $column = intval($move[2]);
    if (TicTacToe::makeAMove($gameBoard, $row, $column, $playersTurn)) {
        display_board($gameBoard);
        if (TicTacToe::winner($gameBoard, $playersTurn) === true) {
            echo "The player using '$playersTurn' has won the game!" . PHP_EOL;
            break;
        } elseif (TicTacToe::draw($gameBoard) === true) {
            echo "The player have made the game in to a draw!" . PHP_EOL;
            break;
        }
        if ($playersTurn == "X") {
            $playersTurn = "O";
        } else {
            $playersTurn = "X";
        }
    } else {
        echo "Invalid move!! Please trt again." . PHP_EOL;
    }
}