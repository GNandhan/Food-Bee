<?php
 include './connect.php';
//  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food-Bee: Catering-Register</title>
  <link rel="stylesheet" href="User/static/home.css">
  <link rel="icon" href="../static/icon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
    body {
      font-family: "DM Sans";
    }
    @import url('https://fonts.googleapis.com/css2?family=Allison&display=swap');
    .allison-regular {
      font-family: "Allison";
      font-weight: normal;
      /* Use 'normal' instead of '400' */
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
    .form-icon {
      font-size: 1.2rem;
    }
    .footer-container {
    position: fixed;
    bottom: 0;
    background-color: white;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="container">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="../../index.html" class="d-inline-flex link-body-emphasis text-decoration-none fw-bold">
          <div class="fs-3 fw-semibold">Food<span class="text-warning">Bee</span></div>
        </a>
      </div>
    </header>
  </div>
  <!-- Navbar Closed -->
  <!-- User Home -->
  <section class="my-2">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-xl-8">
          <div class="card text-black shadow-lg border-0" style="border-radius: 25px;">
            <div class="card-body py-md-">
              <div class="row justify-content-center">
                <div class="col-md-8 col-lg-12 col-xl-7 order-2 order-lg-1">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>
                  <form method="POST"  class="mx-1 mx-md-4">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="bi bi-egg-fried me-3 text-warning form-icon"></i> <!-- Added form-icon class -->
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example3c" class="form-control rounded-4 border border-top-0 p-3 shadow-sm" placeholder="Enter Catering Name" name="catname" required/>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="bi bi-geo-alt me-3 text-warning form-icon"></i> <!-- Added form-icon class -->
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example4c" class="form-control rounded-4  border border-top-0 p-3 shadow-sm" placeholder="Enter Owner Name" name="catown" required/>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="bi bi-telephone me-3 text-warning form-icon"></i> <!-- Added form-icon class -->
                      <div class="form-outline flex-fill mb-0">
                        <input type="number" id="form3Example4c" class="form-control rounded-4  border border-top-0 p-3 shadow-sm" placeholder="Enter Mobile no" name="catmob" required/>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="bi bi-telephone me-3 text-warning form-icon"></i> <!-- Added form-icon class -->
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example4c" class="form-control rounded-4  border border-top-0 p-3 shadow-sm" placeholder="Enter Location" name="catloc" required/>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="bi bi-envelope me-3 text-warning form-icon"></i> <!-- Added form-icon class -->
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example4c" class="form-control rounded-4  border border-top-0 p-3 shadow-sm" placeholder="Enter Email Id" name="catemail" required/>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="bi bi-shield-lock me-3 text-warning form-icon"></i>
                      <div class="form-outline flex-fill position-relative mb-0">
                          <div class="input-group shadow-sm rounded-4  border border-top-0">
                              <input type="password" id="form3Example4" class="form-control rounded-4 border-0 p-3 shadow-none" placeholder="Enter Password" name="catpass" required />
                              <button class="btn border border-0  rounded-end-4" type="button" id="showPassword"><i class="bi bi-eye"></i></button>
                          </div>
                      </div>
                  </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-warning rounded-pill px-5 btn-lg" name="catsubmit">Register</button>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <span>Already a User?</span> 
                      <a href="./login.php" type="button" class="text-decoration-none px-2 mx-2"> Login now <i class=" fw-bold bi-arrow-up-right-circle"></i></a>
                  </div>
                  </form>
                </div>
                <div class="col-md col-lg col-xl d-flex align-items-center order-1 order-lg-2">
                  <img src="../static/registration.png"
                    class="img-fluid" alt="Sample image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- User Home Closed -->
<!-- PHP CODE FOR INSERTING THE DATA -->
<?php
    if(isset($_POST["catsubmit"]))
    {
    $ctname= $_POST["catname"];
    $ctown= $_POST["catown"];
    $ctmob= $_POST["catmob"];
    $ctloc= $_POST["catloc"];
    $ctmail= $_POST["catemail"];
    $ctpass= $_POST["catpass"];

    $sql = mysqli_query($conn, "INSERT INTO catering (catering_name, catering_owner, catering_no, catering_location, catering_email, catering_pass) 
    VALUES ('$ctname', '$ctown', '$ctmob', '$ctloc', '$ctmail', '$ctpass')");
    

if ($sql == TRUE)
{
// echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
echo '<script type="text/javascript">
window.location = "cat-login.php"
</script>';
} 
else
{
// echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";  
echo 'wrong username or password'; 
}
}
?>
    <!-- Footer -->
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
          <div class="col-md-4 d-flex align-items-center">
              <span class="mb-3 mb-md-0 text-dark">&copy; 2024 FoodBee, Inc</span>
          </div>
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-facebook" width="24"
                          height="24"></i></a></li>
              <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-instagram" width="24"
                          height="24"></i></a></li>
              <li class="ms-3"><a class=" text-dark" href="#"><i class="bi bi-twitter-x" width="24"
                          height="24"></i></a></li>
          </ul>
      </footer>
  </div>
  <!-- Footer closed -->
  <script>
    // Toggle password visibility
        document.getElementById("showPassword").addEventListener("click", function () {
      const passwordInput = document.getElementById("form3Example4");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    });
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>