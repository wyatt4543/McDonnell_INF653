<?php
//Challenge 1
$x = 10;
$y = 5;

echo "<pre>";
echo "\nChallenge 1:\n\n";
echo "Number 1: $x\n";
echo "Number 2: $y\n";
echo "Addition: " . ($x+$y) ."\n";
echo "Subtraction: " . ($x-$y) . "\n";
echo "Multiplication: " . ($x*$y) ."\n";
echo "Division: " . ($x/$y) . "\n";
echo "Modulus: " . ($x%$y) . "\n";

//Challenge 2
echo "\nChallenge 2:\n\n";
$input = 7;

echo "Input: $input\n\n";
echo "Output: " . (($input % 2 == 0) ? "$input is an even number." : "$input is an odd number.") . "\n";

//Challenge 3
echo "\nChallenge 3:\n\n";
$num1 = 10;

echo "Starting number: $num1\n\n";
echo "After increment: " . (++$num1) ."\n\n";
echo "After decrement: " . (--$num1) ."\n";

//Challenge 4
echo "\nChallenge 4:\n\n";
$num_grade = 85;
$letter_grade = "Error";

if ($num_grade >= 90) {
	$letter_grade = "A";
} elseif ($num_grade >= 80) {
	$letter_grade = "B";
} elseif ($num_grade >= 70) {
	$letter_grade = "C";
} elseif ($num_grade >= 60) {
	$letter_grade = "D";
} else {
	$letter_grade = "F";
}
/*
The letter grade code could also be written as:
elseif ($num_grade < 60) {
	$letter_grade = "F";
}
*/

echo "Input: $num_grade\n\n";
echo "Output: You got a " . ($letter_grade) . "\n";

//Challenge 5
echo "\nChallenge 5:\n\n";
$year = 2024;

echo "Input: $year\n\n";
echo "Output: " . (($year % 4 == 0) ? "$year is a leap year." : "$year is not a leap year.") . "\n";
echo "<pre>";
?>