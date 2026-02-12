<?php
include '../config/db.php';
session_start();

if($_SESSION['role']!='agency'){
header("Location: ../login.php");
exit();
}

$result = mysqli_query($conn,"SELECT * FROM bookings");
?>

<!DOCTYPE html>
<html>
<head>
<title>Bookings</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
background:linear-gradient(135deg,#1f4037,#99f2c8);
min-height:100vh;
}
.glass{
background:rgba(255,255,255,0.2);
backdrop-filter:blur(10px);
border-radius:20px;
padding:30px;
}
</style>
</head>
<body>

<div class="container mt-5">
<div class="glass shadow">

<h3 class="mb-4">All Bookings</h3>

<table class="table table-bordered table-light">
<tr>
<th>ID</th>
<th>Car</th>
<th>Customer</th>
<th>Start</th>
<th>Days</th>
<th>Total</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['car_id']; ?></td>
<td><?php echo $row['customer_id']; ?></td>
<td><?php echo $row['start_date']; ?></td>
<td><?php echo $row['days']; ?></td>
<td>₹<?php echo $row['total_amount']; ?></td>
</tr>
<?php } ?>

</table>

</div>
</div>

</body>
</html>
