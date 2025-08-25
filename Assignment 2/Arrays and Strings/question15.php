<!--Write a PHP script to count the frequency of each element in an array.-->
<?php
// Sample array
$numbers = [1, 2, 2, 3, 4, 4, 4, 5, 1, 2];

// Use built-in array_count_values() function
$frequency = array_count_values($numbers);

// Display frequencies
echo "Array Elements: " . implode(", ", $numbers) . "<br><br>";
echo "Element Frequencies:<br>";

foreach ($frequency as $element => $count) {
    echo $element . " occurs " . $count . " times<br>";
}