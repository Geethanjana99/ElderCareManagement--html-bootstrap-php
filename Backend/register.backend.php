<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'DBConnect.php'; 

    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $nic = filter_input(INPUT_POST, 'nic', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $contactno = filter_input(INPUT_POST, 'contactno', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'reg-username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'reg-password', FILTER_SANITIZE_STRING);

   
    if (empty($name) || empty($nic) || empty($age) || empty($contactno) || empty($username) || empty($password)) {
        header("Location: ../src/login.php?error=All fields are required");
        exit;
    }

    try {
        
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            header("Location: ../src/login.php?error=Username already taken");
            exit;
        }

     
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
        $stmt = $pdo->prepare("INSERT INTO users (name, nic, age, contactno, username, password) VALUES (:name, :nic, :age, :contactno, :username, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':nic', $nic);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':contactno', $contactno);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            
            header("Location: ../src/login.php?success=Registration successful. Please log in.");
            exit;
        } else {
            
            header("Location: ../src/login.php?error=Registration failed");
            exit;
        }
    } catch (PDOException $e) {
        // Handle SQL errors
        die("Error: " . $e->getMessage());
    }
} else {
    // Redirect if the form was not submitted using POST
    echo "Invalid request";
    exit;
}
