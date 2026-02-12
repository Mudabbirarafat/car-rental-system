<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'agency'){
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agency Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
            min-height: 100vh;
        }

        .navbar {
            background: rgba(0,0,0,0.6);
        }

        .glass-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 30px;
            color: white;
            transition: 0.3s;
        }

        .glass-card:hover {
            transform: translateY(-5px);
        }

        .btn-custom {
            border-radius: 30px;
            font-weight: 500;
        }

        .welcome-text {
            font-weight: 600;
        }

        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px);}
            to { opacity: 1; transform: translateY(0);}
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">🚗 Car Rental</a>
        <div class="ms-auto">
            <a href="../actions/logout.php" class="btn btn-outline-light btn-sm">Logout</a>

        </div>
    </div>
</nav>

<div class="container mt-5 fade-in">

    <div class="text-center text-white mb-5">
        <h2 class="welcome-text">Agency Dashboard</h2>
        <p>Manage your cars and bookings easily</p>
    </div>

    <div class="row g-4 justify-content-center">

        <!-- Add Car -->
        <div class="col-md-4">
            <div class="glass-card text-center shadow">
                <h4>➕ Add New Car</h4>
                <p>Add vehicles to your fleet</p>
                <a href="add_car.php" class="btn btn-primary btn-custom w-100">
                    Add Car
                </a>
            </div>
        </div>

        <!-- View Bookings -->
        <div class="col-md-4">
            <div class="glass-card text-center shadow">
                <h4>📋 View Bookings</h4>
                <p>See customer reservations</p>
                <a href="view_bookings.php" class="btn btn-success btn-custom w-100">
                    View Bookings
                </a>
            </div>
        </div>

        <!-- View Cars -->
        <div class="col-md-4">
            <div class="glass-card text-center shadow">
                <h4>🚘 My Cars</h4>
                <p>Manage your listed cars</p>
                <a href="../available_cars.php" class="btn btn-warning btn-custom w-100 text-dark">
                    View Cars
                </a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
