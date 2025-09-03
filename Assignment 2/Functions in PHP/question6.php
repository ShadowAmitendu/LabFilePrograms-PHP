<!--
Write a user-defined function isEven($n) that returns true if a number is even. Call it inside a loop for numbers 1–10.
-->
<?php

function Even($n): bool
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

for ($i = 0; $i < 10; $i++) {
    echo Even($i) . "<br>";
}