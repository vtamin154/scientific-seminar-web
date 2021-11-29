<?php
session_start();

if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION[] = "Logged out successfully!";
    header("Location:login.php");
    exit();
}
?>