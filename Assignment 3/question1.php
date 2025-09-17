<?php
// Q1: Create Database, Table, and Insert Sample Records using Exception Handling

$host = "localhost";   // Change if needed
$user = "root";        // Change if needed
$pass = "";            // Change if needed

try {
    // Step 1: Connect to MySQL server (no database selected yet)
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Create Database
    $sql = "CREATE DATABASE IF NOT EXISTS lab_db";
    $conn->exec($sql);
    echo "Database created successfully.<br>";

    // Step 3: Connect to lab_db
    $conn = new PDO("mysql:host=$host;dbname=lab_db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 4: Create students table
    $sql = "CREATE TABLE IF NOT EXISTS students (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                email VARCHAR(100) UNIQUE NOT NULL
            )";
    $conn->exec($sql);
    echo "Table 'students' created successfully.<br>";

    // Step 5: Insert 3 sample records
    $sql = "INSERT INTO students (name, email) VALUES
                ('Alice', 'alice@example.com'),
                ('Bob', 'bob@example.com'),
                ('Charlie', 'charlie@example.com')";
    $conn->exec($sql);
    echo "Sample records inserted successfully.<br>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
