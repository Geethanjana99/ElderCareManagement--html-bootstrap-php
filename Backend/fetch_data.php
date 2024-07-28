<?php
// Include the database connection file
require 'Backend/DBConnect.php'; // Adjust path as necessary

try {
    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("SELECT id, name, nic, age, contactno FROM users");
    $stmt->execute();
    
    // Fetch all records
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
