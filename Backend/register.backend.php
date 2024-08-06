<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'DBConnect.php';


    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $nic = filter_input(INPUT_POST, 'nic', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $contactno = filter_input(INPUT_POST, 'contactno', FILTER_SANITIZE_STRING);



    if (empty($name) || empty($nic) || empty($age) || empty($contactno)) {
        header("Location: ../src/login.php?error=All fields are required");
        exit;
    }

    try {

        $stmt = $pdo->prepare("INSERT INTO users (name, nic, age, contactno) VALUES (:name, :nic, :age, :contactno)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':nic', $nic);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':contactno', $contactno);


        if ($stmt->execute()) {

            header("Location: ../dashboard.php?success=Registration successful. Please log in.");
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
