<?php
// Include the database connection file
require 'Backend/DBConnect.php'; // Adjust path as necessary

// Initialize $elderCount with a default value
$elderCount = 0;

try {
    // Prepare and execute the SQL query to get the count of registered elders
    $stmt = $pdo->prepare("SELECT COUNT(id) as count FROM users");
    $stmt->execute();
    
    // Fetch the count
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $elderCount = $result['count'];
} catch (PDOException $e) {
    // Optionally log the error message
    error_log("Database error: " . $e->getMessage());
    // Display a generic error message or handle it as needed
    $elderCount = 'Error fetching data';
}
?>
