<!--
Write a PHP script to display the multiplication table of a given number using a loop.
-->
<?php

$tableOf = 5;

for ($i = 0; $i < $tableOf; $i++) {
    echo "$i x 5 = " . $i * $tableOf . "<br>";
}