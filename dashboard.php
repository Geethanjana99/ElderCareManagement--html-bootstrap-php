<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

require 'Backend/get_count.php'; // Adjust path as necessary

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Elderly Care Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navigation.css">

    <style>
        .sidelink1 {
            background-color: darkcyan;
        }


        .buttonlog1 {
            font-weight: bold;
            color: black;
            border: 2px solid darkblue;
        }

        .buttonlog1:hover {
            background-color: darkblue;
        }

        .card {
            color: white;
            background-color: #00796b;
        }


        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .cardtitle {
            color: white;
            font-size: 1.5rem;
        }

        .moreinfo {
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
                            <a class="nav-link sidelink1" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidelink" href="users.php">Elders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidelink" href="admins.php">Admins</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary buttonlog1"
                                data-toggle="modal" data-target="#registerModal">Register User</button>
                            <a href="AddAdmin/addadmin.php" class="btn btn-sm btn-outline-secondary buttonlog1">Add
                                Admin</a>
                            <a href="Backend/logout.php" class="btn btn-sm btn-outline-secondary buttonlog1">LogOut</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="cardtitle">Total Services</h5>
                                <p class="card-text">4</p>
                                <a href="#" class="btn btn-primary moreinfo">More info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="cardtitle">Senior Citizen</h5>
                                <p class="card-text"><?php echo htmlspecialchars($elderCount); ?></p>
                                <a href="users.php" class="btn btn-primary moreinfo">More info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="cardtitle">Admins</h5>
                                <p class="card-text"><?php echo htmlspecialchars($adminCount); ?></p>
                                <a href="admins.php" class="btn btn-primary moreinfo">More info</a>
                            </div>
                        </div>
                    </div>
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
                        <!-- Removed Username and Password fields -->
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Check for success query parameter
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success') && urlParams.get('success') === '1') {
            alert('Admin added successfully!');
        }
    </script>
</body>

</html>