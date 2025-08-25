<!--Write a PHP function factorial($n) that returns the factorial of a
number using recursion.-->
<?php

function factorial($n): int
{
    if ($n == 0) // Base case
        return 1;
    else
        return $n * factorial($n - 1);
}

echo factorial(6);