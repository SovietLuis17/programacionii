<?php
// Read the comma-separated shopping list
$input = "Blackberry,StrayBerry,GlockBerry,KatyPerri,PipperBerry";

// Create an array from the input
$shoppingList = explode(',', $input);

// TODO: Write your code below
// 1. Print the first item in the list
// 2. Print the third item in the list
// 3. Store the second item in a variable called $secondItem and print it
// 4. Print the item at index 4
echo $shoppingList[0]."<br>";
echo $shoppingList[2]."<br>";
$secondItem = $shoppingList[1];
echo $secondItem."<br>";
echo $shoppingList[4]."<br>";
?>