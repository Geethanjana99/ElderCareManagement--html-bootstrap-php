<?php
// Include the database connection file
require 'Backend/DBConnect.php'; // Adjust path as necessary

try {
    // Prepare and execute the SQL query to get the count of registered elders
    $stmt = $pdo->prepare("SELECT COUNT(id) as count FROM users");
    $stmt->execute();
    
    // Fetch the count
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $elderCount = $result['count'];
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
