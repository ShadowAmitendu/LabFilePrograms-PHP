<!-- Write a PHP script that reverses a string without using strrev(). -->
<?php
$str = "Hello PHP";
$len = strlen($str);
$reversed = "";

for ($i = $len - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}

echo "Original String: " . $str . "<br>";
echo "Reversed String: " . $reversed;
?>
