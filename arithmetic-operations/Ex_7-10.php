<?php
// Exercise #7
// Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in meters.

$a = -9.81;
$t = 10;
$v = 0;
$x = 0;

$xt = (0.5 * $a) * pow($t, 2) + $v + $x;
echo $xt . PHP_EOL;

// Exercise #8
//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//If the number of hours is greater than 60, print an error message.

$employees = [
    [
        "Employee" => "Employee 1",
        "Base Pay" => 7.50,
        "Hours Worked" => 35
    ],
    [
        "Employee" => "Employee 2",
        "Base Pay" => 8.20,
        "Hours Worked" => 47
    ],
    [
        "Employee" => "Employee 3",
        "Base Pay" => 10.00,
        "Hours Worked" => 73
    ]
];

function payment($salary)
{
    if ($salary["Base Pay"] < 8.00) {
        return "Error, base pay is too low." . PHP_EOL;
    }
    if ($salary["Hours Worked"] > 60) {
        return "Error, too many work hours." . PHP_EOL;
    }
    if ($salary["Hours Worked"] <= 40) {
        $pay = $salary["Hours Worked"] * $salary["Base Pay"];
        return "The total pay is $pay$" . PHP_EOL;
    }
    $workHourPay = $salary["Base Pay"] * 40;
    $overtime = $salary["Hours Worked"] - 40;
    $overtimePay = ($salary["Base Pay"] * 1.5) * $overtime;
    $pay = $workHourPay + $overtimePay;
    return "The total pay with overpay is $pay$" . PHP_EOL;
}

foreach ($employees as $salary)
    echo payment($salary);

// Exercise 9
// Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in meters. The formula in Math notation is:

$heightcm = (float)readline("Enter height in meters: " . PHP_EOL);
$weightkg = (int)readline("Enter weight in kg: " . PHP_EOL);

if (empty($heightcm) || $heightcm < 0 || empty($weightkg) || $weightkg < 0) {
    echo "Invalid values." . PHP_EOL;
    exit;
}

$height = ($heightcm * 100) / 2.54;
$weight = $weightkg * 2.20462;
$bmi = ($weight * 703) / pow($height, 2);
echo "Your BMI is: " . number_format($bmi, 2) . PHP_EOL;
if ($bmi < 18.5) {
    echo "Your body satus is: underweight." . PHP_EOL;
} elseif ($bmi > -18.5 && $bmi <= 25) {
    echo "Your body satus is: optimal." . PHP_EOL;
} else {
    echo "Your body satus is: overweight." . PHP_EOL;
}

// Exercise 10

class Geometry
{
// A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
// Area = π * r * 2
// Use Math.PI for π and r for the radius of the circle
    public static function areaOfCircle($r)
    {
        return number_format(M_PI * $r * 2, 2);
    }

// A static method that accepts the length and width of a rectangle and returns the area of the rectangle. Use the following formula:
// Area = Length x Width
    public static function areaOfRectangle($length, $width)
    {
        return number_format($length * $width, 2);
    }
// A static method that accepts the length of a triangle’s base and the triangle’s height. The method should return the area of the triangle. Use the following formula:
// Area = Base x Height x 0.5
    public static function areaOfTriangle($base, $height)
    {
        return number_format($base * $height * 0.5, 2);
    }

    public static function check($ONE)
    {
        if (empty($ONE) || $ONE < 0) {
            echo "Invalid values." . PHP_EOL;
            return exit;
        }
        return 0;
    }
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
echo "Enter your choice (1-4) : ";

$choice = (int)readline();

switch ($choice) {
    case 1:
        Geometry::check($r = (int)readline("Enter the circles radius: "));
        echo Geometry::areaOfCircle($r) . PHP_EOL;
        break;
    case 2:
        Geometry::check($length = (int)readline("Enter the length of the rectangle: "));
        Geometry::check($width = (int)readline("Enter the width of the rectangle: "));
        echo Geometry::areaOfRectangle($length, $width) . PHP_EOL;
        break;
    case 3:
        Geometry::check($base = (int)readline("Enter the base of the triangle: "));
        Geometry::check($height = (int)readline("Enter the height of the triangle: "));
        echo Geometry::areaOfTriangle($base, $height) . PHP_EOL;
        break;
    case 4:
        echo "Exit program." . PHP_EOL;
        break;
    default:
        echo "Something's wrong, error." . PHP_EOL;
        break;
}