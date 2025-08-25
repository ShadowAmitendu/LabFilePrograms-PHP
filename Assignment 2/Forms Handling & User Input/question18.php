<!-- Create a form that takes an email. Sanitize and validate the email before printing. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Validation</title>
</head>
<body>
<h2>Email Validation Form</h2>

<form method="post">
    <label>
        Enter Email:
        <input type="text"
               name="email"
               required>
    </label>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get raw input
    $email = $_POST['email'];

    // Sanitize input (remove illegal characters)
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate email
    if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:green;'>Valid Email: $sanitizedEmail</p>";
    } else {
        echo "<p style='color:red;'>Invalid Email Format</p>";
    }
}
?>
</body>
</html>
