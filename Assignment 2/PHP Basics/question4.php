<!--Write a PHP program that determines the grade of a student using marks input, based on:
 • ≥90: A
 • ≥75: B
 • ≥50: C
 • <50: Fail
 -->
<?php
// Marks input
$marks = 95;

// Determine grade using if-else
if ($marks >= 90) {
    echo "Grade: A";
} elseif ($marks >= 75) {
    echo "Grade: B";
} elseif ($marks >= 50) {
    echo "Grade: C";
} else {
    echo "Grade: Fail";
}
