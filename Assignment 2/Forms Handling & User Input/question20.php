<!-- Create a registration form that accepts Name, Age, and Gender. Validate that Age is a number between 18–60 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
<h2>User Registration</h2>

<form method="post">
    <label>
        Name:
        <input type="text"
               name="name"
               required>
    </label><br><br>
    <label>
        Age:
        <input type="number"
               name="age"
               required>
    </label><br><br>
    Gender:
    <label>Male

        <input type="radio"
               name="gender"
               value="Male"
               required>
    </label>
    <label>
        Female
        <input type="radio"
               name="gender"
               value="Female">
    </label>
    <label>
        Other
        <input type="radio"
               name="gender"
               value="Other">
    </label>
    <br><br>
    <input type="submit"
           value="Register">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $age = $_POST['age'];
    $gender = $_POST['gender'] ?? "";

    if (!is_numeric($age)) {
        echo "<p style='color:red;'>Age must be a number.</p>";
    } elseif ($age < 18 || $age > 60) {
        echo "<p style='color:red;'>Age must be between 18 and 60.</p>";
    } else {
        echo "<h3>Registration Successful!</h3>";
        echo "Name: $name <br>";
        echo "Age: $age <br>";
        echo "Gender: $gender <br>";
    }
}
?>
</body>
</html>
