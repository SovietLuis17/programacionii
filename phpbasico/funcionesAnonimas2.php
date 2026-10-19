<?php
$message = "Welcome";

$greeting = function($name) use ($message) {
    echo $message . ", " . $name . "!";
};

$greeting("Bob");  // Outputs: Welcome, Bob!
?>