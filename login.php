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

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select username from signin where username = '".$username."' and password = '".$password."' limit 1";

    $result = mysqli_query($connect,$sql);
    
    if(mysqli_num_rows($result) == 1){
        // echo "You have successfully logged in!";
        header("Location: index.html");
        // exit();
    }
    else{
        echo "Login failded!";
        exit();
    }
}
$connect->close();
?>

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="register.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="events.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  </head>
  <body>
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
  </body>
</html> -->
