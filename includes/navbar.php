<?php session_start(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="available_cars.php">Car Rental</a>

<div>
<?php if(isset($_SESSION['role'])): ?>
<a href="available_cars.php" class="btn btn-outline-light btn-sm">Home</a>
<a href="actions/logout.php" class="btn btn-danger btn-sm">Logout</a>
<?php else: ?>
<a href="login.php" class="btn btn-outline-light btn-sm">Login</a>
<?php endif; ?>
</div>

</div>
</nav>
