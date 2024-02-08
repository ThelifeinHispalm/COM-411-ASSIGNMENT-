<?php

$i = 4;
$d = 4.0;
$s = "Polyilaro ";

// Declare second integer, double, and String variables.
$secondInt;
$secondDouble;
$secondString;

// Read and save an integer, double, and String to your variables.
$handle = fopen("php://stdin", "r");
$secondInt = intval(trim(fgets($handle)));
$secondDouble = floatval(trim(fgets($handle)));
$secondString = trim(fgets($handle));

// Print the sum of both integer variables on a new line.
echo ($i + $secondInt) . PHP_EOL;

// Print the sum of the double variables on a new line.
echo number_format($d + $secondDouble, 1) . PHP_EOL;

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s . $secondString . PHP_EOL;

fclose($handle);
?>
