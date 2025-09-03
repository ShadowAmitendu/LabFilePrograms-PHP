<!-- Write a PHP program that counts the number of vowels in a string.-->
<?php

$sentence = "This has Vowels? Then How Many?";
$sentence = strtolower($sentence);
$vowels = ['a', 'e', 'i', 'o', 'u'];
$count = 0;

for ($i = 0; $i < strlen($sentence); $i++) {
    if (in_array($sentence[$i], $vowels)) $count++;
}

echo "Number of vowels: $count";

?>
