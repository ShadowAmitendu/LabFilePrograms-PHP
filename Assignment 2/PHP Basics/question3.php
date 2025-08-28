<!--
Write a PHP script to display the multiplication table of a given number using a loop.
-->
<?php

$tableOf = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$i x $tableOf = " . $i * $tableOf . "<br>";
}