<?php
// Read the comma-separated colors
$colorsInput = "Red,Blue,Yellow,Green,Orange,BlueBerry";
$colors = explode(',', $colorsInput);

// Read the modification inputs
$index1 = "White";
$newValue1 = "Black";
$index2 = "Gray";

// TODO: Write your code here
// 1. Modify the element at index1 to be newValue1
$colors[$index1] = $newValue1;
// 2. Modify the element at index2 to be "Purple"
$colors[$index2] = "Purple";

// Output each element on a separate line
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>