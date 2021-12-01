<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vitam</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="article.css" />
    <link rel="stylesheet" href="register.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Vitam</a>
            <!-- search -->
            <form>
                <input type="search" placeholder="Tìm kiếm" class="form-control text-white" />
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

                    <?php if (isset($_SESSION['auth_user'])) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" href="#">
                                <?= $_SESSION['auth_user']['user_username']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width: 30px;">
                                <li>
                                    <!-- <a href="#" class="dropdown-item">Logout</a> -->
                                    <form action="./admin/logout.php" method="post">
                                        <button class="dropdown-item" type="submit" name="logout">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>

                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./admin/login.php">Đăng nhập</a>
                        </li>

                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>