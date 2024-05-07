<?php
// Exercise 1
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: " . PHP_EOL;
foreach ($numbers as $print) {
    echo $print . PHP_EOL;
}


echo "Sorted numeric array: " . PHP_EOL;
sort($numbers);

foreach ($numbers as $print) {
    echo $print . PHP_EOL;
}

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original string array: " . PHP_EOL;

foreach ($words as $print) {
    echo $print . PHP_EOL;
}


echo "Sorted string array: " . PHP_EOL;
sort($words);

foreach ($words as $print) {
    echo $print . PHP_EOL;
}

// Exercise 2
// calculate an average value of the numbers

$numbers = [20, 30, 25, 35, -16, 60, -100];
$average = number_format(array_sum($numbers) / count($numbers), 2);

echo "The average is: " . $average . PHP_EOL;

// Exercise 3
// check if an array contains a value user entered

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$search = (int)readline() . PHP_EOL;
if (in_array($search, $numbers)) {
    echo "The array contains the value $search" . PHP_EOL;
} else {
    echo "The array doesn't contain the value $search" . PHP_EOL;
}

// Exercise 4
// Create an array of ten integers
// Fill the array with ten random numbers (1-100)
// Copy the array into another array of the same capacity
// Change the last value in the first array to a -7
// Display the contents of both arrays

$array1 = [];

for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(1, 100);
}

$array2 = $array1;
$array1[count($array1) - 1] = -7;

echo "Original array: " . PHP_EOL;
foreach ($array2 as $contents) {
    echo $contents . PHP_EOL;
}
echo "Modified array: " . PHP_EOL;
foreach ($array1 as $contents) {
    echo $contents . PHP_EOL;
}