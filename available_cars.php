<?php
include 'config/db.php';
session_start();

$result = mysqli_query($conn, "SELECT * FROM cars");
?>

<!DOCTYPE html>
<html>
<head>
<title>Available Cars</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    background: linear-gradient(135deg,#141E30,#243B55);
    min-height:100vh;
}
.glass{
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(15px);
    border-radius:20px;
    color:white;
    transition:0.3s;
}
.glass:hover{
    transform:translateY(-5px);
}
.navbar{
    background:rgba(0,0,0,0.6);
}
</style>
</head>

<body>

<nav class="navbar navbar-dark">
<div class="container">
<a class="navbar-brand fw-bold" href="index.php">🚗 Car Rental</a>
</div>
</nav>

<div class="container mt-5">
<h2 class="text-center text-white mb-5">Available Cars</h2>

<div class="row g-4">
<?php while($row = mysqli_fetch_assoc($result)){ ?>
<div class="col-md-4">
<div class="card glass shadow p-3 text-center">

<img src="https://source.unsplash.com/400x250/?car,<?php echo $row['model']; ?>" 
class="img-fluid rounded mb-3">

<h5><?php echo $row['model']; ?></h5>
<p>Vehicle No: <?php echo $row['vehicle_number']; ?></p>
<p class="fw-bold">₹<?php echo $row['rent_per_day']; ?>/day</p>

<?php if(isset($_SESSION['role']) && $_SESSION['role']=='customer'){ ?>
<form action="actions/rent_car.php" method="POST">
<input type="hidden" name="car_id" value="<?php echo $row['id']; ?>">
<input type="date" name="start_date" required class="form-control mb-2">
<input type="number" name="days" placeholder="Days" required class="form-control mb-2">
<button class="btn btn-warning w-100">Rent Now</button>
</form>
<?php } ?>

</div>
</div>
<?php } ?>
</div>
</div>

</body>
</html>
