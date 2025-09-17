<?php
// Q2: Update Bob's email and display all student records using Exception Handling

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab_db";

try {
    // Step 1: Connect to lab_db
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Update Bob's email
    $sql = "UPDATE students SET email = :newEmail WHERE name = :name";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':newEmail' => 'bob.new@example.com',
        ':name' => 'Bob'
    ]);
    echo "Bob's email updated successfully.<br>";

    // Step 3: Fetch and display all records
    $sql = "SELECT * FROM students";
    $stmt = $conn->query($sql);

    echo "<h3>Student Records:</h3>";
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
