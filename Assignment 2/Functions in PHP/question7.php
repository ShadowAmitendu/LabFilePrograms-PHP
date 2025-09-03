<!--
Write a function calculateArea($radius) to calculate the area of a circle. Call it with different radii.
-->
<?php

function calculateArea($radius): float //<-- this is return type
{
    return 3.14 * $radius * $radius;
}

echo calculateArea(5) . "<br>";
echo calculateArea(45);