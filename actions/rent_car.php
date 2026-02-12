<?php
session_start();
include '../config/db.php';

if($_SESSION['role'] != 'customer'){
    die("Unauthorized");
}

$car_id = $_POST['car_id'];
$days = $_POST['days'];
$start_date = $_POST['start_date'];

// Prevent double booking
$check = $conn->prepare("SELECT id FROM bookings WHERE car_id=? AND start_date=?");
$check->bind_param("is", $car_id, $start_date);
$check->execute();
$check->store_result();

if($check->num_rows > 0){
    die("Car already booked for this date.");
}

$stmt = $conn->prepare("SELECT rent_per_day FROM cars WHERE id=?");
$stmt->bind_param("i", $car_id);
$stmt->execute();
$result = $stmt->get_result();
$car = $result->fetch_assoc();

$total = $car['rent_per_day'] * $days;

$insert = $conn->prepare("INSERT INTO bookings (car_id,customer_id,start_date,days,total_amount) VALUES (?,?,?,?,?)");
$insert->bind_param("iisid", $car_id, $_SESSION['user_id'], $start_date, $days, $total);
$insert->execute();

header("Location: ../customer/dashboard.php");
?>