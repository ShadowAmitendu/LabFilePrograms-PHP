<!--Write a PHP program that determines the grade of a student using marks input, based on:
 • ≥90: A
 • ≥75: B
 • ≥50: C
 • <50: Fail
 -->
<?php

$grade = 95;

switch ($grade) {
    case 90:
        echo "A";
        break;
    case 75:
        echo "B";
        break;
    case 50:
        echo "C";
        break;
    default:
        echo "Fail";
}