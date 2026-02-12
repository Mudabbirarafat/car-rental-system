<?php
include '../config/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Check duplicate email
$check = $conn->prepare("SELECT id FROM users WHERE email=?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if($check->num_rows > 0){
    die("Email already exists.");
}

$stmt = $conn->prepare("INSERT INTO users (name,email,password,role) VALUES (?,?,?,'customer')");
$stmt->bind_param("sss", $name, $email, $password);
$stmt->execute();

header("Location: ../login.php");
?>