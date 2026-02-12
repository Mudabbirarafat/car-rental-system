<?php
session_start();
if($_SESSION['role']!='agency'){
header("Location: ../login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Car</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
}
.glass{
background:rgba(255,255,255,0.1);
backdrop-filter:blur(15px);
padding:40px;
border-radius:20px;
color:white;
width:400px;
}
</style>
</head>
<body>

<div class="glass">
<h3 class="text-center mb-4">Add New Car</h3>

<form action="../actions/add_car.php" method="POST">
<input name="model" class="form-control mb-3" placeholder="Car Model" required>
<input name="vehicle_number" class="form-control mb-3" placeholder="Vehicle Number" required>
<input type="number" name="rent_per_day" class="form-control mb-3" placeholder="Rent Per Day" required>
<button class="btn btn-warning w-100">Add Car</button>
</form>

</div>

</body>
</html>
