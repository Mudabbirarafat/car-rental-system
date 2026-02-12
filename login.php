<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Car Rental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
            height: 100vh;
            overflow: hidden;
        }

        .glass-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(18px);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 450px;
            color: white;
            animation: fadeIn 0.8s ease-in-out;
        }

        .form-control {
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
        }

        .form-control::placeholder {
            color: #ddd;
        }

        .form-control:focus {
            background: rgba(255,255,255,0.3);
            color: white;
            box-shadow: none;
        }

        .btn-login {
            background: linear-gradient(45deg,#00c6ff,#0072ff);
            border: none;
            font-weight: 600;
        }

        .btn-login:hover {
            opacity: 0.9;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px);}
            to { opacity: 1; transform: translateY(0);}
        }

        .brand-title {
            font-weight: 600;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="glass-card shadow-lg">

        <h3 class="text-center mb-2 brand-title">🚗 Car Rental Login</h3>
        <p class="text-center mb-4 text-light">Access your dashboard</p>

        <form action="actions/login.php" method="POST">

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>

            <div class="mb-4">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-login w-100 text-white">
                Login
            </button>

        </form>

        <div class="text-center mt-4">
            <small class="text-light">
                Don't have an account?
            </small>
            <br>
            <a href="register_customer.php" class="text-decoration-none text-info">
                Register as Customer
            </a>
            |
            <a href="register_agency.php" class="text-decoration-none text-warning">
                Register as Agency
            </a>
        </div>

    </div>

</div>

</body>
</html>
