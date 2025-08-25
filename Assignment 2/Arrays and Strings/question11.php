<!--
Write a PHP script that stores names of 5 students in an array and prints
them in alphabetical order.
-->
<?php

$students = array('Evan', 'Parag', 'Deep', 'Aritra', 'Amitendu');

foreach ($students as $student) {
    echo $student . '<br>';
}
