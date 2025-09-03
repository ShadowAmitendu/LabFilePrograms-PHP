<!--
Create a PHP script that defines a function inside another function
(nested functions). The outer function should print a message and call the inner one.

-->
<?php

function outer(): void
{
    function inner(): string
    {
        return "from inner function";
    }

    echo "from outer function<br>";
    echo "<b>inner function calling return: </b>" . inner();
}

outer();