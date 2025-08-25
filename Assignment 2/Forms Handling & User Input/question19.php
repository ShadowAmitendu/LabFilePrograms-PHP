<!-- Write a PHP script that accepts two numbers from a form and displays their sum, difference, product, and quotient. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arithmetic Operations</title>
</head>
<body>
<h2>Enter Two Numbers</h2>

<form method="post">
    <label>
        Number 1:
        <input type="number"
               name="num1"
               required>
    </label><br><br>
    <label>
        Number 2:
        <input type="number"
               name="num2"
               required>
    </label><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;
    $diff = $num1 - $num2;
    $prod = $num1 * $num2;
    $quot = ($num2 != 0) ? ($num1 / $num2) : "Undefined (division by zero)";

    echo "<h3>Results:</h3>";
    echo "Sum = $sum <br>";
    echo "Difference = $diff <br>";
    echo "Product = $prod <br>";
    echo "Quotient = $quot <br>";
}
?>
</body>
</html>
