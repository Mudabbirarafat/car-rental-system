<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "sql111.infinityfree.com";
$username = "if0_41138697";
$password = "Aousaf123";   // your DB password
$database = "if0_41138697_cars_rental";  // correct name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
