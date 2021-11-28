<?php
include('connection.php');

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select username from signin where username = '" . $username . "' and password = '" . $password . "' limit 1";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) == 1) {
    // echo "You have successfully logged in!";
    header("Location: index.php");
    exit();
  } else {
    echo "Login failded!";
    exit();
  }
}
$connect->close();

include('../header.php');
?>
<div>

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
