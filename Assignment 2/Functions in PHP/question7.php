<!--
Write a function calculateArea($radius) to calculate the area of a circle. Call it with different radii.
-->
<?php


$radius = 5;

function calculateArea($radius) {
    return 3.14 * $radius * $radius;
}

echo calculateArea($radius);