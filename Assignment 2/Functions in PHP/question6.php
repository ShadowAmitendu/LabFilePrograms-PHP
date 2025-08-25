<!--
Write a user-defined function is Even($n) that returns true if a number is even. Call it inside a loop for numbers 1–10.
-->
<?php

function Even($n) {
    if ($n % 2 == 0) {
        return true;
    }
}

for ($i = 0; $i < 10; $i++) {
    echo Even($i) . "<br>";
}