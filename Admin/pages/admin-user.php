<?php
 include './connect.php';
 error_reporting(0);
 session_start();
 if($_SESSION["email"]=="")
 {
    header('location:admin-login.php');
 }
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
        <li class="active"><a href="./admin-user.php"><i class="fa fa-user"></i>Users</a></li>
        <li><a href="./admin-food.php"><i class="fa fa-user"></i>Food</a></li>
      </ul>
    </aside>
    <div id="navbar-wrapper">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid justify-content-between">
          <div class="navbar-header position-absolute top-0">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          </div>
          <div class="d-flex align-items-center position-absolute end-0">
            <button class="btn rounded-circle border-0"  data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../static/user.png" alt="" width="40">
            </button>
            <ul class="dropdown-menu" style="margin-right:20px;">
                <li><a class="dropdown-item" href="admin-login.php">Log out</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
        <h2 class="content-title display-4 fw-semibold border-start px-3 border-4 border-dark">Users Details</h2>
          <div class="container"  style="width:90%;">
            <div class="row my-5">
              <!-- Php code for displaying user details -->
<?php  
$sql=mysqli_query($conn,"SELECT * FROM user ORDER BY user_id ");
$serialNo = 1;
while($row=mysqli_fetch_assoc($sql))
{
    $us_id=$row['user_id'];
    $us_name=$row['user_name'];
    $us_loc=$row['user_location'];
    $us_phno=$row['user_phno'];
    $us_mail=$row['user_email'];
?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                <div class="card text-decoration-none h-100 rounded-5 p-3 border-3 border-warning-subtle border-top-0 shadow-lg">
                  <img src="../static/profile.png" class="card-img-top rounded-top-4 mx-auto" alt="..." style="width:150px;">
                  <div class="card-body">
                    <div class="card-title fs-2 fw-bold"><?php echo $us_name; ?></div>
                    <p class="card-text text-secondary"><?php echo $us_loc; ?></p>
                    <p class="card-text text-secondary"><?php echo $us_phno; ?></p>
                    <p class="card-text text-secondary"><?php echo $us_mail; ?></p>
                  </div>
                </div>
              </div>
<?php
}
?>
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