<?php
// Q6: Update the name of 'Alice' to 'Alicia' and display all records

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab_db";

try {
    // Step 1: Connect to lab_db
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Update Alice -> Alicia
    $sql = "UPDATE students SET name = :newName WHERE name = :oldName";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':newName' => 'Alicia',
        ':oldName' => 'Alice'
    ]);

    if ($stmt->rowCount() > 0) {
        echo "Student name updated from 'Alice' to 'Alicia'.<br>";
    } else {
        echo "No student found with the name 'Alice'.<br>";
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
