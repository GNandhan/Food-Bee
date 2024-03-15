<?php
 include './connect.php';
 error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food-Bee: Home</title>
  <link rel="stylesheet" href="User/static/home.css">
  <link rel="icon" href="../static/icon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
    body {
      font-family: "DM Sans";
    }
    @import url('https://fonts.googleapis.com/css2?family=Allison&display=swap');
    .allison-regular {
      font-family: "Allison";
      font-weight: normal;
      font-style: normal;
    }
    .nav-link {
      position: relative;
      text-decoration: none;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -2px;
      width: 100%;
      height: 2px;
      background-color: transparent;
      transition: background-color 0.3s ease;
    }
    .nav-link:hover::after {
      background-color: #FFC107;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="../../index.html" class="d-inline-flex link-body-emphasis text-decoration-none fw-bold">
          <div class="fs-3 fw-semibold">Food<span class="text-warning">Bee</span></div>
        </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-dark border-bottom border-warning border-2">Home</a></li>
        <li><a href="#" class="nav-link px-2 text-dark">About</a></li>
        <li><a href="#" class="nav-link px-2 text-dark">Contact</a></li>
      </ul>
      <div class="col-md-3 text-end">
        <a href="./login.php" type="button" class="btn btn-dark rounded-pill px-5 py-1 me-2 fw-semibold">Logout</a>
      </div>
    </header>
  </div>
  <!-- Navbar Closed -->
  <!-- User Home -->
  <div class="container">
    <div class="row">
      <div class="col-lg col-md col-sm col">
        <div class="fs-5 fw-bold border-start border-2 border-warning"> &nbsp;Food<span class="text-warning">Bee</span>:
          Home</div>
      </div>
    </div>
    <div class="row my-5">
<?php  
$sql=mysqli_query($conn,"SELECT * FROM food ORDER BY food_id ");
$serialNo = 1;
while($row=mysqli_fetch_assoc($sql))
{
    $food_id = $row['food_id'];
    $food_name=$row['food_name'];
    $food_qua=$row['food_quantity'];
    $food_type=$row['food_type'];
    $food_img=$row['food_img'];
    $food_date=$row['food_date'];
    $food_location=$row['food_location'];
    $catering_id=$row['catering_id'];

    $catering_query = mysqli_query($conn, "SELECT `catering_name`, `catering_no` FROM `catering` WHERE `catering_id`='$catering_id'");
    $catering_row = mysqli_fetch_assoc($catering_query);
    $cat_name = $catering_row['catering_name'];
    $cat_no = $catering_row['catering_no'];
    $modalId = "modal" . $food_id;
?>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 my-3">
                <div class="card text-decoration-none h-100 rounded-5 p-3 border-warning-subtle border-start-0 shadow-lg">
                  <div class="row g-0">
                    <div class="col-md-5">
                    <img src="../../Catering/static/food/<?php echo $food_img; ?>" class="card-img-top rounded-top-4 mx-auto" alt="..." style="object-fit: contain; width: 100%; height: 100%;">
                    </div>
                    <div class="col-md-7">
                      <div class="card-body border-start border-3 mx-2">
                        <div class="card-title fs-2 fw-bold"><?php echo $food_name; ?></div>
                        <p class="card-text text-secondary"><?php echo $food_qua; ?></p>
                        <p class="card-text text-secondary"><?php echo $food_type; ?></p>
                        <p class="card-text text-secondary"><?php echo $food_location; ?></p>
                        <button class="btn btn-warning rounded-3 px-4 border-0" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">view</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- Modal -->
<div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 border-0">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../../Catering/static/food/<?php echo $food_img; ?>" alt="" style="object-fit: contain; width: 100%; height: 100%;">
        <div class="fs-2 fw-bold">Food : <?php echo $food_name; ?></div>
        <p class="text-secondary">Quantity : <?php echo $food_qua; ?></p>
        <p class="text-secondary">Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $food_type; ?></p>
        <p class="text-secondary">Location : <?php echo $food_location; ?></p>
        <p class="text-secondary">Catering : <?php echo $cat_name; ?></p>
        <p class="text-secondary">Number &nbsp;: <?php echo $cat_no; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="rounded-4 px-4 btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="button" class="rounded-4 px-4 btn btn-warning">Send Request</button>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
    </div>
  </div>
  <!-- User Home Closed -->



  
  <!-- Section 6 -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg col-md col-sm col p-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#000" fill-opacity="1" d="M0,96L34.3,96C68.6,96,137,96,206,106.7C274.3,117,343,139,411,149.3C480,160,549,160,617,133.3C685.7,107,754,53,823,58.7C891.4,64,960,128,1029,138.7C1097.1,149,1166,107,1234,85.3C1302.9,64,1371,64,1406,64L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
          </path>
        </svg>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-lg col-md col-sm col" style="background-color: #000;">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <div class="fs-3 fw-bold text-white">Get a Quote for Food World</div>
                  <div class="fs-5 text-white">Reach out to us anytime – we're here to help!</div>
                </div>
                <div class="col-md-4">
                  <!-- Search bar -->
                  <div class="input-group">
                    <input type="password" class="form-control rounded-start-pill" placeholder="Enter your Email here" />
                    <button class="btn rounded-end-pill p-1" style="background-color: white;"><span class="btn btn-warning rounded-pill">Subscribe Now</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section 6 closed -->
  <!-- Section 7 -->
  <div class="container-fluid" style="background-color: #000;">
    <div class="row">
      <div class="col-lg col-md col-sm col">
        <div class="container">
          <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5">
            <div class="col-lg col-md col-sm col mb-3">
              <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis fs-2 fw-bold text-white text-decoration-none">
                <img src="../static/icon.png" alt="" width="40">Food<span class="text-warning">Bee</span>
              </a>
              <p class="text-white">FoodBee simplifies food management by connecting users with surplus food from caterers.
                Enjoy easy browsing, purchasing, and contributing to sustainability efforts.</p>
            </div>
            <div class="col-lg col-md col-sm col mb-3">
              <h5 class=" text-white fw-bold fs-4">Information</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact</a></li>
              </ul>
            </div>
            <div class="col-lg col-md col-sm col mb-3">
              <h5 class="text-white fw-bold fs-4">Get in Touch</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"><i
                      class="bi bi-geo-alt-fill text-warning"></i> 5807 north Batthery, Wayanad, Kerala</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"><i
                      class="bi bi-telephone-fill text-warning"></i> +91 847 595 8698</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white"><i
                      class="bi bi-envelope-fill text-warning"></i> foodbee@gmail.com</a></li>
              </ul>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <!-- Section 7 closed -->
  <!-- Section 8 -->
  <div class="container-fluid" style="background-color: black;">
    <div class="row">
      <div class="col-lg col-md col-sm col">
        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-5">
            <div class="col-md-4 d-flex align-items-center">
              <span class="mb-3 mb-md-0 text-white">&copy; 2024 FoodBee, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class=" text-white" href="#"><i class="bi bi-facebook" width="24" height="24"></i></a></li>
              <li class="ms-3"><a class=" text-white" href="#"><i class="bi bi-instagram" width="24" height="24"></i></a></li>
              <li class="ms-3"><a class=" text-white" href="#"><i class="bi bi-twitter-x" width="24" height="24"></i></a></li>
            </ul>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <!-- Section 8 closed -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>