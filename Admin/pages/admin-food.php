<?php
 include './connect.php';
 error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Home</title>
  <link rel="stylesheet" href="../static/admin.css">
  <link rel="icon" href="../static/icon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- Dashboard body -->
  <div id="wrapper">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <h2><div class="fs-3 fw-semibold">Food<span class="text-warning">Bee</span></div></h2>
      </div>
      <ul class="sidebar-nav">
        <li><a href="./admin-home.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="./admin-catering.php"><i class="fa fa-plug"></i>Catering</a></li>
        <li><a href="./admin-user.php"><i class="fa fa-user"></i>Users</a></li>
        <li class="active"><a href="./admin-food.php"><i class="fa fa-user"></i>Food</a></li>
      </ul>
    </aside>
    <div id="navbar-wrapper">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid justify-content-between">
          <div class="navbar-header position-absolute top-0">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          </div>
          <div class="d-flex align-items-center position-absolute end-0">
            <button class="btn rounded-circle border-0" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <img src="../static/user.png" alt="" width="40">
            </button>
          </div>
        </div>
      </nav>
    </div>
    <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="content-title">Test</h2>
          <div class="container">
          <div class="row my-5">
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-1">
        <a href="./User/pages/login.php" class="card text-decoration-none h-100 rounded-4 shadow border-0">
          <img src="User/static/food 1.jpg" class="card-img-top rounded-top-4" alt="...">
          <div class="card-body">
            <h5 class="card-title">Food 1</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-1">
        <a  href="./User/pages/login.php" class="card text-decoration-none h-100 rounded-4 shadow border-0">
          <img src="User/static/food 1.jpg" class="card-img-top rounded-top-4" alt="...">
          <div class="card-body">
            <h5 class="card-title">Food 1</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-1">
        <a  href="./User/pages/login.php" class="card text-decoration-none h-100 rounded-4 shadow border-0">
          <img src="User/static/food 1.jpg" class="card-img-top rounded-top-4" alt="...">
          <div class="card-body">
            <h5 class="card-title">Food 1</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-1">
        <a  href="./User/pages/login.php" class="card text-decoration-none h-100 rounded-4 shadow border-0">
          <img src="User/static/food 1.jpg" class="card-img-top rounded-top-4" alt="...">
          <div class="card-body">
            <h5 class="card-title">Food 1</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </a>
      </div>
    </div>
          </div>
        </div>
      </div>
      <div class="row">
<!-- Section 8 -->
  <div class="container-fluid" >
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-dark">&copy; 2024 FoodBee, Inc</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-facebook" width="24" height="24"></i></a></li>
        <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-instagram" width="24" height="24"></i></a></li>
        <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-twitter-x" width="24" height="24"></i></a></li>
      </ul>
    </footer>
  </div>
<!-- Section 8 closed -->
      </div>
    </section>
  </div>
<!-- Dashboard body -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    const $button = document.querySelector('#sidebar-toggle');
    const $wrapper = document.querySelector('#wrapper');
    $button.addEventListener('click', (e) => {
      e.preventDefault();
      $wrapper.classList.toggle('toggled');
    });
  </script>
</body>
</html>