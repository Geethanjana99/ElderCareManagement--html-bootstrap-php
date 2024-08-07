<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'DBConnect.php';

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    if (empty($id)) {
        header("Location: ../admins.php?error=Invalid user ID");
        exit;
    }

    try {
        $stmt = $pdo->prepare("DELETE FROM admins WHERE id = :id");
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            header("Location: ../admins.php?success=User deleted successfully");
            exit;
        } else {
            header("Location: ../admins.php?error=Failed to delete user");
            exit;
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: ../admins.php?error=Invalid request");
    exit;
}
