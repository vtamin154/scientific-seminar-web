<?php
include('authentication.php');
// include('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $event = $_POST['event'];

    $query = "insert into eventregisted value (null, '$name', '$phone', '$date', '$event');";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $message = "Register success!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register event</title>
    <link rel="stylesheet" href="register.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="events.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Vitam</a>
            <!-- search -->
            <form>
                <input type="search" placeholder="Tìm kiếm" class="form-control" />
            </form>
            <!-- Link -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLink">
                <span class="navbar-toggler-icon"> </span>
            </button>

            <div class="collapse navbar-collapse" id="collapseLink">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/" data-link>Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event" data-link>Sự kiện</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dien-gia" data-link>Diễn giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mission">Nhiệm vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#goals">Mục tiêu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#posts">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <form action="" method="post">
        <div id="login-box">
            <div class="right">
                <h1>Đăng ký tham gia sự kiện</h1>

                <input type="text" id="name" name="name" placeholder="Name" require />

                <input type="text" id="phone" name="phone" placeholder="Phone" require />

                <select class="form-select mt-3" aria-label="Default select example" require name="date">
                    <option selected>Choose date</option>
                    <option value="2021-12-01">2021-12-01</option>
                    <option value="2021-12-02">2021-12-02</option>
                    <option value="2021-12-03">2021-12-03</option>
                    <option value="2021-12-04">2021-12-04</option>
                </select>

                <select class="form-select mt-3" aria-label="Default select example" required name="event">
                    <option selected>Choose event</option>
                    <option value="Bệnh tăng huyết áp">Bệnh tăng huyết áp</option>
                    <option value="Hội thảo về cơ tim">Hội thảo về cơ tim</option>
                    <option value="Hệ thống đo tim mạch">Hệ thống đo tim mạch</option>
                    <option value="Các nguy cơ tim mạch">Các nguy cơ tim mạch</option>
                </select>

                <input type="submit" name="submit" value="Gửi" />
            </div>
        </div>
    </form>
</body>

</html>


<!-- SET  @num := 0;
 
UPDATE eventregisted SET id = @num := (@num+1);
 
ALTER TABLE eventregisted AUTO_INCREMENT =1; -->