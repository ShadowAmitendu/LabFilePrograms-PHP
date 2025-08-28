<!--
    Create a PHP script that calculates whether a given number is divisible by both 3 and 5, only 3, only 5, or neither.
-->
<?php

$number = 15;

if ($number % 3 == 0 and $number % 5 == 0) {
    echo "The number is divisible by both 3 and 5. <br>";
} elseif ($number % 3 == 0) {
    echo "The number is divisible by 3. <br>";
} else {
    echo "The number is divisible by 5. <br>";
}
