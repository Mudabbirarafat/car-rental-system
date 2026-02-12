<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Customer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg,#141e30,#243b55);
            height: 100vh;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 40px;
            color: white;
            width: 100%;
            max-width: 450px;
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

        .btn-custom {
            background: linear-gradient(45deg,#ff512f,#dd2476);
            border: none;
        }

        .btn-custom:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="glass-card shadow-lg">

        <h3 class="text-center mb-4">👤 Register as Customer</h3>

        <form action="actions/register_customer.php" method="POST">

            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>

            <div class="mb-4">
                <input type="password" name="password" class="form-control" placeholder="Create Password" required>
            </div>

            <button type="submit" class="btn btn-custom w-100 text-white">
                Register Customer
            </button>

        </form>

        <div class="text-center mt-3">
            <a href="login.php" class="text-light text-decoration-none">
                Already have an account? Login
            </a>
        </div>

    </div>

</div>

</body>
</html>
