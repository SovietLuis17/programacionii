<?php
// Read fruit inputs
$fruit1 = "mora";
$fruit2 = "manzana";
$fruit3 = "pera";

// Read number inputs
$num1 = 10;
$num2 = 5;

// TODO: Write your code below
// 1. Create an indexed array called $fruits containing the three fruits
$fruits = [$fruit1, $fruit2, $fruit3];

// 2. Create an indexed array called $numbers containing the two numbers
$numbers = [$num1, $num2];

// 3. Create an empty array called $emptyList
$emptyList = [];

// 4. Print the results as specified
echo "Fruits: " . implode(",", $fruits) . "<br>";
echo "Numbers: " . implode(",", $numbers) . "<br>";
echo "Empty: " . (count($emptyList) == 0 ? "yes" : "no") . "<br>";

?>