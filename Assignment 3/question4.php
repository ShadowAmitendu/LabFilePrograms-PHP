<?php
// Q4: Select and display only the student whose name is 'Alice'

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lab_db";

try {
    // Step 1: Connect to lab_db
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Select student with name = 'Alice'
    $sql = "SELECT * FROM students WHERE name = :name";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':name' => 'Alice']);

    // Step 3: Display result
    if ($stmt->rowCount() > 0) {
        echo "<h3>Student Record for Alice:</h3>";
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
    } else {
        echo "No record found for 'Alice'.";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
