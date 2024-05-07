<?php

// Exercise 1
// Create a function that accepts any string and returns the same value with added "codelex" by the end of it. Print this value out.

function codelex(string $name): string
{
    return "$name codelex";
}

echo codelex("something") . PHP_EOL;

// Exercise 2
// Create a function that accepts 2 integer arguments. First argument is a base value and the second one is a value its been multiplied by. For example, given argument 10 and 5 prints out 50

function b(int $a, int $b): int
{
    return $a * $b;
}

echo b(5, 10) . PHP_EOL;

// Exercise 3
// Create a person object with name, surname and age. Create a function that will determine if the person has reached 18 years of age. Print out if the person has reached age of 18 or not.

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

function fullage($people)
{
    if ($people["age"] >= 18) {
        return $people["name"] . " " . $people["surname"] . "has reached age of 18" . PHP_EOL;
    }
    return $people["name"] . " " . $people["surname"] . "has not reached age of 18" . PHP_EOL;
}

echo fullage($person);

// Exercise 4
// Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

$persons = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 50
    ],
    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 41
    ],
    [
        "name" => "Tom",
        "surname" => "Nook",
        "age" => 16
    ],
    [
        "name" => "Homer",
        "surname" => "Simpson",
        "age" => 39
    ]
];

foreach ($persons as $people) {
    echo fullage($people);
}

// Exercise 5
// Create a 2D associative array in 2nd dimension with fruits and their weight.
// Create a function that determines if fruit has weight over 10kg. Create a secondary array with shipping costs per weight. Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro. Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$shelf = [
    [
        "fruits" => "peachs",
        "weight" => 6
    ],
    [
        "fruits" => "bananas",
        "weight" => 8
    ],
    [
        "fruits" => "watermelons",
        "weight" => 24
    ],
    [
        "fruits" => "pineapples",
        "weight" => 16
    ],
    [
        "fruits" => "apples",
        "weight" => 10
    ]
];

function weighin($weight)
{
    if ($weight["weight"] >= 10) {
        return "Shipping " . $weight["fruits"] . " weighing " . $weight["weight"] . " kg will cost 2 euro." . PHP_EOL;
    }
    return "Shipping " . $weight["fruits"] . " weighing " . $weight["weight"] . " kg will cost 1 euro." . PHP_EOL;
}

foreach ($shelf as $cost) {
    echo weighin($cost);
}

// Exercise 6
// Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string. Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array. Create a function that doubles the integer number. Within the loop using php in-built function print out the double of the number value (using your custom function)

$differentElements = [100, 2, 5.5, 999, "Hello"];

function doubleIntagerCount($elements)
{
    if (is_int($elements)) {
        return $elements * 2;
    }
    return $elements;
}

for ($i = 0; $i < count($differentElements); $i++) {
    echo "Regular arrays values: $differentElements[$i]   New arrays values: ";
    if (is_int($differentElements[$i])) {
        echo doubleIntagerCount($differentElements[$i]) . PHP_EOL;
    } else {
        echo $differentElements[$i] . PHP_EOL;
    }
}