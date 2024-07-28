<?php
session_start(); // Start the session at the very beginning

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection script
    require 'db_connection.php'; // Assume this file contains your PDO connection $pdo

    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Fetch the user from the database
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password (assuming the password in the database is hashed)
        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id']; // Assuming there's an 'id' field

            // Redirect to a protected page
            header("Location: dashboard.php");
            exit;
        } else {
            // Redirect back to the login page with an error
            header("Location: login.html?error=Invalid username or password");
            exit;
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>