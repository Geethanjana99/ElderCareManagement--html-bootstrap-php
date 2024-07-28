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

       
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const error = urlParams.get('error');
            if (error) {
                if (error == 1) {
                    alert('All fields are required');
                } else if (error == 2) {
                    alert('Invalid username or password');
                }
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
            <form id="login-form" action="Backend/login.backend.php" method="post">
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
            <form action="Backend/register.backend.php" method="post">
                <label for="name">Name </label>
                <input type="text" id="name" name="name" required>
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
