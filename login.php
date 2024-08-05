<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Elderly Care Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
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
            <h2>Login To Admin Dashboard</h2>
            <form id="login-form" action="Backend/login.backend.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Login" id="login">
            </form>
            
        </section>
    </main>
    </div>
   <?php include 'Components/footer.php'; ?>
</body>
</html>
