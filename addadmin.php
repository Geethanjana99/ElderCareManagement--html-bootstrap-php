<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/admin.css">
    <script>
        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <?php include 'Components/navigation.php'; ?>
    <div class="container">
        <div class="card">
            <img src="images/HomePageImg/banner2.jpg" alt="Admin Image">
            <div class="form-container">
                <h2 style="color: var(--primary-color);">Add Admin</h2>
                <form action="Backend/process_admin.php" method="post" onsubmit="return validateForm()">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <input type="submit" value="Add Admin">
                </form>
            </div>
        </div>
    </div>
    <?php include 'Components/footer.php'; ?>
</body>

</html>
