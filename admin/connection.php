<?php
$username = "root";
$password = "";
$server = "localhost";
$dbname = "login";

$connect = mysqli_connect($server, $username, $password, $dbname);

if ($connect->connect_error) {
  die("Kết nối lỗi:" . $connect->connect_error);
  exit();
}
