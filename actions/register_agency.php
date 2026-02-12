<?php
include '../config/db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
$conn->query("INSERT INTO users (name,email,password,role) VALUES ('$name','$email','$password','agency')");
header("Location: ../login.php");
?>