<?php
// Q5 (Improved): Insert a new student ('David', 'david@example.com') and display all records
// Handles duplicate email errors gracefully

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab_db";

try {
    // Step 1: Connect to lab_db
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Try inserting new student record
    try {
        $sql = "INSERT INTO students (name, email) VALUES (:name, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':name' => 'David',
            ':email' => 'david@example.com'
        ]);
        echo "New student 'David' added successfully.<br>";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // Duplicate entry error
            echo "Cannot insert 'David': Email already exists.<br>";
        } else {
            throw $e; // Re-throw other errors
        }
    }

    // Step 3: Fetch and display all records
    $sql = "SELECT * FROM students";
    $stmt = $conn->query($sql);

    echo "<h3>All Student Records:</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
              </tr>";
    }
    echo "</table>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
