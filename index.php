<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vitam</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="article.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
  </div>
  <!-- header -->
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
            <a class="nav-link" href="./admin/login.php">Đăng nhập</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="app"></div>

  <footer class="bg-dark mt-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 text-white my-4">
          <h2 class="border-bottom pb-3 text-uppercase">Liên hệ</h2>
          <p>Vitam</p>
          <p>
            <i class="fas fa-map-marked-alt me-2"></i></i>Km10, Nguyễn Trãi, Hà
            Đông, Hà Nội
          </p>
          <p><i class="fas fa-phone-alt me-2"></i>0987654321</p>
          <p><i class="far fa-envelope me-2"></i>Email:vitam@gmail.com</p>


          <!-- Facebook  -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col-lg-7">
          <iframe class=" my-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6513561823635!2d105.7899506142456!3d21.04663169254548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab306caa83a7%3A0xbfe4b316823e38f7!2zSOG7jWMgVmnhu4duIEPDtG5nIE5naOG7hyBCxrB1IENow61uaCBWaeG7hW4gVGjDtG5n!5e0!3m2!1svi!2s!4v1635856847552!5m2!1svi!2s" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white text-decoration-none" href="">vitam.com</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
  <script type="module" src="./static/js/router.js"></script>
</body>

</html>