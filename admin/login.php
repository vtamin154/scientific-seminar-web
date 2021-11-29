<?php
session_start();

if (isset($_SESSION['auth'])) {
  $_SESSION['message'] = "You are already logged In";
  header("Location: index.php");
  exit();
}

include('connection.php');

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select * from user where username = '" . $username . "' and password = '" . $password . "' limit 1";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) == 1) {
    foreach ($result as $data) {
      $user_id = $data['id'];
      $user_username = $data['username'];
      $user_role = $data['role'];
    }

    $_SESSION['auth'] = true;
    $_SESSION['auth_role'] = "$user_role";
    $_SESSION['auth_user'] = [
      'user_id' => $user_id,
      'user_username' => $user_username,
    ];

    if ($_SESSION['auth_role'] == 'admin') {
      $_SESSION['message'] = "Welcome admin manage page";
      header("Location: home_manage.php");
      exit();
    } elseif ($_SESSION['auth_role'] == 'user') {
      $_SESSION['message'] = "Welcome to dashboard";
      header("Location: ../index.php");
      exit();
    }
  } else {
    $_SESSION['message'] = "Login failded!";
    header("Location:login.php");
    exit();
  }
}
$connect->close();

include('../header.php');
?>
<div>
  <?php
  // session_start();
  include('message.php');
  ?>
  <form action="" method="post">
    <div id="login-box">
      <div class="left">
        <h1>Đăng nhập</h1>

        <input type="text" id="username" name="username" placeholder="Username" />

        <input type="password" id="password" name="password" placeholder="Password" />

        <input type="submit" name="signup_submit" value="Đăng nhập" />
      </div>
    </div>
  </form>

</div>