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
    <title>Registered Elders - Elderly Care Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .sidelink1 {
            background-color: darkcyan;
        }

        </style>
</head>

<body>
    <?php include 'Components/navigation.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidelink1" href="users.php">Elders</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="admins.php">Admins</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Registered Elders</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal"
                                data-target="#registerModal">Register User</button>
                            <a href="Backend/logout.php" class="btn btn-sm btn-outline-secondary">LogOut</a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>NIC</th>
                                <th>Age</th>
                                <th>Contact Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Include the fetch data script
                            require 'Backend/fetch_data.php'; // Adjust path as necessary
                            
                            if (!empty($result)) {
                                foreach ($result as $row) {
                                    echo "<tr><td>" . htmlspecialchars($row["id"]) . "</td><td>" . htmlspecialchars($row["name"]) . "</td><td>" . htmlspecialchars($row["nic"]) . "</td><td>" . htmlspecialchars($row["age"]) . "</td><td>" . htmlspecialchars($row["contactno"]) . "</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No records found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Backend/register.backend.php" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="nic">NIC:</label>
                            <input type="text" class="form-control" id="nic" name="nic" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>
                        <div class="form-group">
                            <label for="contactno">Contact Number:</label>
                            <input type="text" class="form-control" id="contactno" name="contactno" required>
                        </div>
                        <div class="form-group">
                            <label for="reg-username">Username:</label>
                            <input type="text" class="form-control" id="reg-username" name="reg-username" required>
                        </div>
                        <div class="form-group">
                            <label for="reg-password">Password:</label>
                            <input type="password" class="form-control" id="reg-password" name="reg-password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include 'Components/footer.php'; ?>
</body>

</html>