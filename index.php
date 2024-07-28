<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elderly Care Management System</title>
    <link rel="stylesheet" href="CSS/style.css">

    <style>
        body {
            background-color: lightgray;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .jumbotron {
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .nav-link {
            font-size: 1.1rem;
        }
        .container {
            max-width: 900px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }
        .footer a {
            color: #ffc107;
        }
        .footer .social-media a {
            margin-right: 15px;
            font-size: 1.5rem;
        }
        .section-title {
            margin-top: 40px;
            margin-bottom: 20px;
        }
        .img-placeholder {
            width: 100%;
            height: auto;
            background-color: #ccc;
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-md-6 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            flex: 0 0 50%;
            max-width: 50%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Elderly Care Management System</h1>
    </header>
    
    <?php include 'Components/navigation.php'; ?>
    <div>
        //add the content here
    </div>
    <?php include 'Components/footer.php'; ?>
</body>
</html>
