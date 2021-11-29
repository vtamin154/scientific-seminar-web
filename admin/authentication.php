<?php
session_start();
include('connection.php');

if($_SESSION['auth_role'] != "admin"){
    $_SESSION['message'] = "You are not login!";
    header("Location: login.php");
    exit();
}
