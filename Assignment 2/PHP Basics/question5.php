<!--
Write a PHP script that finds the largest of three numbers using conditional operators.
-->
<?php

$a = 15;
$b = 28;
$c = 21;

$largest = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo $largest;