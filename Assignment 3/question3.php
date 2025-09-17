<?php
// Q3: Delete student record with name 'Carol' and display remaining records

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab_db";

try {
    // Step 1: Connect to lab_db
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Delete record where name = 'Carol'
    $sql = "DELETE FROM students WHERE name = :name";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':name' => 'Carol']);

    if ($stmt->rowCount() > 0) {
        echo "Record for 'Carol' deleted successfully.<br>";
    } else {
        echo "No record found for 'Carol'.<br>";
    }

    // Step 3: Fetch and display remaining records
    $sql = "SELECT * FROM students";
    $stmt = $conn->query($sql);

    echo "<h3>Remaining Student Records:</h3>";
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
