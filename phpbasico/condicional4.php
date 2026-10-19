<?php
$age = 20;

// Using if-else
if ($age >= 18) {
    $status = "adult";
} else {
    $status = "minor";
}

// Same thing with ternary operator
$status = $age >= 18 ? "adult" : "minor";

echo $status; // adult
?>