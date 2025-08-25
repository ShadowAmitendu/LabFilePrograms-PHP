<!-- Create a PHP form where user enters a number, and the script displays whether it is prime or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prime Number Check</title>
</head>
<body>
<h2>Check Prime Number</h2>

<form method="post">
    <label>Enter a Number:
        <input type="number"
               name="num"
               required>
    </label>

    <input type="submit"
           value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];

    if ($num <= 1) {
        echo "<p>$num is NOT a prime number.</p>";
    } else {
        $isPrime = true;

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo "<p>$num is a Prime Number.</p>";
        } else {
            echo "<p>$num is NOT a Prime Number.</p>";
        }
    }
}
?>
</body>
</html>
