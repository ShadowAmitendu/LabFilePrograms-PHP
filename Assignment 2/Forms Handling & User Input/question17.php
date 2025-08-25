<!-- Create a form that accepts a username and password. Validate that both are non-empty and password length ≥6. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Validation</title>
</head>
<body>
<h2>User Login</h2>

<form method="get">
    <label>
        Username:
        <input type="text"
               name="username"
               required>
    </label><br><br>
    <label>
        Password:
        <input type="password"
               name="password"
               required>
    </label><br><br>
    <input type="submit"
           value="Login">
</form>

<?php
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = trim($_GET['username']);
    $password = $_GET['password'];

    if (empty($username)) {
        echo "<p style='color:red;'>Username cannot be empty.</p>";
    } elseif (empty($password)) {
        echo "<p style='color:red;'>Password cannot be empty.</p>";
    } elseif (strlen($password) < 6) {
        echo "<p style='color:red;'>Password must be at least 6 characters long.</p>";
    } else {
        echo "<p style='color:green;'>Login successful! Welcome, $username.</p>";
    }
}
?>
</body>
</html>
