<?php
session_start();
include '../config/db.php';
$agency_id=$_SESSION['user_id'];
$conn->query("INSERT INTO cars (agency_id,model,vehicle_number,seating_capacity,rent_per_day)
VALUES ('$agency_id','{$_POST['model']}','{$_POST['vehicle_number']}','{$_POST['seating_capacity']}','{$_POST['rent_per_day']}')");
header("Location: ../agency/dashboard.php");
?>