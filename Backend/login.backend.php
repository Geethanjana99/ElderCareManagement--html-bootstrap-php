<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'DBConnect.php'; 

    // Retrieve and sanitize user input
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (empty($username) || empty($password)) {
        header("Location: ../login.php?error=All fields are required");
        exit;
    }

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
            header("Location: ../dashboard.php");
            exit;
        } else {
            // Redirect back to the login page with an error
            header("Location: ../login.php?error=Invalid username or password");
            exit;
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    // Redirect if the form was not submitted using POST
    header("Location: ../login.php");
    exit;
}
?>
