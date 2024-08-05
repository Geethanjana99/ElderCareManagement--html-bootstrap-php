<?php
require '../Backend/DBConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user input
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit;
    }

    try {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare SQL statement to prevent SQL injection
        $stmt = $pdo->prepare("INSERT INTO admins (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        header("Location: ../dashboard.php");
        exit;
    } catch (PDOException $e) {
        echo "Error adding user: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>