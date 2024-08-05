<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elderly Care Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    
    <?php include 'Components/navigation.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/HomePageImg/banner1.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Quality Elderly Care</h5>
                    <p>Providing the best care for your loved ones.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/HomePageImg/banner2.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Professional Staff</h5>
                    <p>Our team is dedicated to providing excellent service.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/HomePageImg/banner3.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Comfort & Safety</h5>
                    <p>Your comfort and safety are our top priorities.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-3">
        <!-- Our Team Section -->
        <section>
            <h2 class="text-center">Our Team</h2>
            <p class="text-center">Meet our dedicated team of caregivers who are committed to providing excellent service.</p>
            <div class="row my-4">
                <div class="col-md-6">
                    <img src="images/HomePageImg/ourTeam.jpg" class="img-fluid" alt="Our Team">
                </div>
                <div class="col-md-6">
                    <h3>Professional and Caring</h3>
                    <p>Our team is made up of highly trained professionals who are passionate about providing the best care possible. We are here to support your loved ones with compassion and expertise.</p>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section>
            <h2 class="text-center">About Us</h2>
            <p class="text-center">Learn more about our mission and values.</p>
            <div class="row my-4">
                <div class="col-md-6">
                    <img src="images/HomePageImg/aboutus.jpg" class="img-fluid" alt="About Us">
                </div>
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p>We aim to provide a safe and nurturing environment for the elderly. Our mission is to enhance the quality of life for our residents by offering personalized care and support.</p>
                </div>
            </div>
        </section>

        <!-- Contact Us Section -->
        <section>
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">Get in touch with us to learn more about our services.</p>
            <div class="row my-4">
                <div class="col-md-6">
                    <img src="images/HomePageImg/contact us.jpg" class="img-fluid" alt="Contact Us">
                </div>
                <div class="col-md-6">
                    <h3>We're Here to Help</h3>
                    <p>If you have any questions or need more information about our services, please don't hesitate to contact us. We're here to assist you and provide the support you need.</p>
                    <p><strong>Email:</strong> info@elderlycare.com</p>
                    <p><strong>Phone:</strong> (123) 456-7890</p>
                </div>
            </div>
        </section>
    </div>

    <?php include 'Components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

