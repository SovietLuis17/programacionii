<?php
// Read input
$input = "1,2,3,4,5,10,24,21112,3312,223,1122,11,333,111";
$numbers = explode(',', $input);

// TODO: Write your code below to calculate the sum using a foreach loop
$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

// Output the result
echo $sum;
?>