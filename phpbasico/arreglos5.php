<?php
// Read the comma-separated input
$input = "Laptop,Mouse,Keyboard,Monitor,Webcam";

// Convert the input string into an array
$items = explode(',', $input);

// TODO: Write your code below
// 1. Print the total number of items using count()
echo count($items) . "\n";

// 2. Print the last element (use count() to calculate the last index)
echo $items[count($items) - 1] . "\n";

// 3. Print the second-to-last element
echo $items[count($items) - 2] . "\n";

?>