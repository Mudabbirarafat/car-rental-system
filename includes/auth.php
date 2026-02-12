<?php
session_start();
function checkAgency(){
    if(!isset($_SESSION['role']) || $_SESSION['role']!='agency'){
        header("Location: ../login.php");
        exit();
    }
}
function checkCustomer(){
    if(!isset($_SESSION['role']) || $_SESSION['role']!='customer'){
        header("Location: ../login.php");
        exit();
    }
}
?>