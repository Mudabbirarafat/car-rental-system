<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Rental Agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            min-height: 100vh;
        }

        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            padding: 40px;
            color: white;
        }

        .navbar {
            background: rgba(0,0,0,0.7);
        }

        .carousel img {
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">🚗 Car Rental</a>
        <div>
            <?php if(!isset($_SESSION['role'])) { ?>
                <a href="login.php" class="btn btn-outline-light me-2">Login</a>
                <a href="register_customer.php" class="btn btn-light">Register</a>
            <?php } else { ?>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            <?php } ?>
        </div>
    </div>
</nav>

<div class="container mt-5">

    <!-- CAROUSEL -->
    <div id="carCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner rounded shadow-lg">

            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a" class="d-block w-100">
            </div>

        </div>
    </div>

    <!-- HERO GLASS SECTION -->
    <div class="glass text-center shadow-lg" data-aos="fade-up">
        <h1 class="mb-3">Premium Car Rental Experience</h1>
        <p class="mb-4">Luxury • Comfort • Reliability</p>

        <?php if(!isset($_SESSION['role'])) { ?>
            <a href="register_customer.php" class="btn btn-primary me-2">Register as Customer</a>
            <a href="register_agency.php" class="btn btn-success me-2">Register as Agency</a>
            <a href="available_cars.php" class="btn btn-light">View Cars</a>
        <?php } else { ?>
            <a href="available_cars.php" class="btn btn-light">View Cars</a>
        <?php } ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
