<?php
session_start();
if($_SESSION['role']!='customer'){
header("Location: ../login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
background:linear-gradient(135deg,#373B44,#4286f4);
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
}
.card-custom{
background:white;
border-radius:20px;
padding:40px;
text-align:center;
}
</style>
</head>
<body>

<div class="card-custom shadow">
<h3>Welcome Customer</h3>
<p>Manage your bookings easily</p>
<a href="../available_cars.php" class="btn btn-primary w-100 mb-2">View Cars</a>
<a href="../actions/logout.php" class="btn btn-danger w-100">Logout</a>
</div>

</body>
</html>
