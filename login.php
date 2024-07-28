<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Elderly Care Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function toggleRegistration() {
            var registerForm = document.getElementById("register-form");
            var loginForm = document.getElementById("login-form");

            // Toggle visibility of forms
            if (registerForm.style.display === "none") {
                registerForm.style.display = "block";
                loginForm.style.display = "none";
            } else {
                registerForm.style.display = "none";
                loginForm.style.display = "block";
            }
        }
    </script>
</head>
<body>
   <?php include 'Components/navigation.php'; ?>
   <div class="container1">
    <main>

        <section class="login-section">
            <h2>Login</h2>
            <form id="login-form" action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Login">
            </form>
            <p>Not registered? <a href="#" onclick="toggleRegistration()">Register</a></p>
        </section>
        <section class="register-section" id="register-form" style="display:none;">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <label for="nameini">Name </label>
                <input type="text" id="nameini" name="nameini" required>
                <label for="nic">NIC:</label>
                <input type="text" id="nic" name="nic" required>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
                <label for="contactno">Contact Number:</label>
                <input type="text" id="contactno" name="contactno" required>
                <label for="reg-username">Username:</label>
                <input type="text" id="reg-username" name="reg-username" required>
                <label for="reg-password">Password:</label>
                <input type="password" id="reg-password" name="reg-password" required>
                <input type="submit" value="Register">
            </form>
            <p>Already registered? <a href="#" onclick="toggleRegistration()">Login</a></p>
        </section>
    </main>
    </div>
   <?php include 'Components/footer.php'; ?>
</body>
</html>

