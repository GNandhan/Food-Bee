<?php
 include './connect.php';
 error_reporting(0);
 session_start();
 if($_SESSION["email"]=="")
 {
    header('location:cat-login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catering-Home</title>
  <link rel="stylesheet" href="../static/catering.css">
  <link rel="icon" href="../static/icon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
if(isset($_GET['fid']))
{
    $fd_id = $_GET['fid'];
    $f_query = mysqli_query($conn,"SELECT * FROM food WHERE food_id = '$fd_id'");
    $f_row1=mysqli_fetch_array($f_query);

        $fd_name1 = $f_row1['food_name'];
        $fd_gua1 = $f_row1['food_quantity'];
        $fd_type1 = $f_row1['food_type']; 
        $fd_img1 = $f_row1['food_img']; 
        $fd_date1 = $f_row1['food_date']; 
        $fd_location1 = $f_row1['food_location']; 
}
// fetching the data from the URL for deleting the subject form
if(isset($_GET['fd_id']))
{
    $dl_id = $_GET['fd_id'];
    $dl_query = mysqli_query($conn,"SELECT * FROM food WHERE food_id = '$dl_id'");
    $dl_row1=mysqli_fetch_array($dl_query);
    $img = '../static/food/'.$dl_row1['food_img'];
    $del = mysqli_query($conn,"DELETE FROM food WHERE food_id='$dl_id'");
    if($del){
        unlink($img); //for deleting the existing image from the folder
        header("location:cat-food.php");
    }
    else{
        echo "Deletion Failed";
    }    
}
?>
  <!-- Dashboard body -->
  <div id="wrapper">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <h2><div class="fs-3 fw-semibold">Food<span class="text-warning">Bee</span></div></h2>
      </div>
      <ul class="sidebar-nav">
        <li><a href="./cat-home.php"><i class="fa fa-home"></i>Home</a></li>
        <li class="active"><a href="./cat-food.php"><i class="fa fa-plug"></i>Add Food</a></li>
        <li><a href="./cat-request.php"><i class="fa fa-user"></i>View Request</a></li>
      </ul>
    </aside>
    <div id="navbar-wrapper">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid justify-content-between">
          <div class="navbar-header position-absolute top-0">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          </div>
          <div class="d-flex align-items-center position-absolute end-0">
            <button class="btn rounded-circle border-0" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../static/user.png" alt="" width="40">
            </button>
            <ul class="dropdown-menu" style="margin-right:20px;">
              <li><a class="dropdown-item" href="cat-login.php">Log out</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="content-title display-4 fw-semibold border-start px-3 border-4 border-dark">Food List</h2>
          <div class="container">
            <div class="row my-5 border-bottom pb-5">
              <div class="fs-3 fw-semibold border-start border-3 border-warning mb-4">Add Food</div>
              <div class="card p-5 rounded-4 border-0 shadow">
                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="fdid" value="<?php echo $fd_id; ?>">
                  <div class="row my-4">
                    <div class="col">
                      <label for="formGroupExampleInput" class="form-label">Food </label>
                      <input type="text" class="form-control rounded-4" placeholder="Food name"  name="fdname"  value="<?php echo $fd_name1; ?>" required>
                    </div>
                    <div class="col">
                      <label for="formGroupExampleInput" class="form-label">Food Type</label>
                      <select class="form-select form-select-lg py-2 rounded-4" name="fdtype">
                        <option selected>Open this select menu</option>
                        <option value="Vegeterian" <?php if($fd_type1=='Vegeterian' ) echo 'selected' ; ?> >Vegeterian</option>
                        <option value="Non-Veg" <?php if($fd_type1=='Non-Veg' ) echo 'selected' ; ?> >Non-Veg</option>
                        <option value="Starters" <?php if($fd_type1=='Starters' ) echo 'selected' ; ?> >Starters</option>
                      </select>
                    </div>
                  </div>
                  <div class="row my-4">
                    <div class="col">
                      <label for="formGroupExampleInput" class="form-label">Quantity</label>
                      <input type="text" class="form-control rounded-4" placeholder="food quantity"  name="fdqua"  value="<?php echo $fd_gua1; ?>" required>
                    </div>
                    <div class="col">
                      <label for="formGroupExampleInput" class="form-label">Location</label>
                      <input type="text" class="form-control rounded-4" placeholder="Location"  name="fdloc"  value="<?php echo $fd_location1; ?>" required>
                    </div>
                    <div class="col">
                      <label for="formGroupExampleInput" class="form-label">Image </label>
                          <input type="file" class="custom-file-input form-control rounded-4 file-upload-info" id="inputGroupFile01" name="fdimg" onchange="displaySelectedFileName(this)"  value="<?php echo $fd_img1; ?>" required>
                          <input type="hidden" name="current_shimg" value="<?php echo $fd_img1; ?>">
                    </div>
                  </div>
                  <!-- <div class="row my-3"> -->
                  <button type="submit" class="btn btn-warning rounded-4 px-5" name="fdsubmit">Submit</button>
                  <!-- </div> -->
                </form>
              </div>
            </div>
<!-- PHP CODE FOR INSERTING THE DATA -->
<?php
if(isset($_POST["fdsubmit"])){
    $fd_id = $_POST["fdid"];
    $fd_name= $_POST["fdname"];
    $fd_type= $_POST["fdtype"];
    $fd_qua= $_POST["fdqua"];
    $fd_loc= $_POST["fdloc"];
    $fd_img = $_FILES['fdimg']['name'];

  // Image uploading formats
  $filename = $_FILES['fdimg']['name'];
  $tempname = $_FILES['fdimg']['tmp_name'];
  // $folder = "../images/food/" . $filename;

// Fetch the shake ID from the form
$fd_id = $_POST["fdid"];

if($fd_id=='') {
  $sql = mysqli_query($conn,"INSERT INTO food (food_name, food_quantity, food_type, food_img, food_date, food_location) 
                                       VALUES ('$fd_name','$fd_qua','$fd_type','$filename', NOW(), '$fd_loc')");
} else {
  // Update existing record
  if ($filename) {
      // Remove the existing image if a new one is uploaded
      $img = "../static/food/" . $fd_img;
      unlink($img);
      // Update record with new image
      $sql = mysqli_query($conn, "UPDATE food SET food_name='$fd_name', food_quantity='$fd_qua', food_type='$fd_type', food_img='$filename', food_location='$fd_loc' WHERE food_id='$fd_id'");
  } else {
      // Update record without changing the image
      $sql =  mysqli_query($conn, "UPDATE food SET food_name='$fd_name', food_quantity='$fd_qua', food_type='$fd_type', food_location='$fd_loc' WHERE food_id='$fd_id'");
  }
}
if ($sql == TRUE){
move_uploaded_file($tempname, "../static/food/$filename");
echo "<script type='text/javascript'>('Operation completed successfully.');</script>";
} 
else{
  echo "<script type='text/javascript'>('Error: " . mysqli_error($conn) . "');</script>";
}
}
?>

<!-- FOR displaying the food -->
            <div class="row my-5">
<?php  
$sql=mysqli_query($conn,"SELECT * FROM food ORDER BY food_id ");
$serialNo = 1;
while($row=mysqli_fetch_assoc($sql))
{
    $food_id=$row['food_id'];
    $food_name=$row['food_name'];
    $food_qua=$row['food_quantity'];
    $food_type=$row['food_type'];
    $food_img=$row['food_img'];
    $food_date=$row['food_date'];
    $food_location=$row['food_location'];
    $food_catid=$row['catering_id'];
?>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 my-3">
                <div class="card text-decoration-none h-100 rounded-5 p-3 border-3 border-warning-subtle border-top-0 shadow-lg">
                  <div class="row g-0">
                    <div class="col-md-5">
                    <img src="../static/food/<?php echo $food_img; ?>" class="card-img-top rounded-top-4 mx-auto" alt="..." style="object-fit: contain; width: 100%; height: 100%;">
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <div class="card-title fs-2 fw-bold"><?php echo $food_name; ?></div>
                        <p class="card-text text-secondary"><?php echo $food_qua; ?></p>
                        <p class="card-text text-secondary"><?php echo $food_type; ?></p>
                        <p class="card-text text-secondary"><?php echo $us_mail; ?></p>
                        <p class="card-text text-secondary"><?php echo $food_location; ?></p>
                        <p class="card-text text-dark"><?php echo $food_date; ?></p>
                        <div class="row">
                        <div class="col"><a href="cat-food.php?fid=<?php echo $food_id ?>" class="btn btn-warning rounded-4 px-5 border-0"><i class="bi bi-pencil-square"></i></a></div>
                        <div class="col"><a href="cat-food.php?fd_id=<?php echo $food_id ?>" class="btn btn-danger rounded-4 px-5 border-0"><i class="bi bi-trash-fill"></i></a></div>
                    </div>
                      </div>
                    </div>
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
      <!-- Section 8 -->
      <div class="row">
        <div class="container">
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
      </div>
      <!-- Section 8 closed -->
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
<script>
function displaySelectedFileName(input) {
    var fileName = input.files[0].name;
    var label = input.nextElementSibling;
    label.innerText = fileName;

    // Display selected image
    var fileReader = new FileReader();
    fileReader.onload = function(e) {
        var img = document.createElement("img");
        img.src = e.target.result;
        img.style.width = "350px"; // Set width
        img.style.height = "auto"; // Maintain aspect ratio
        img.style.borderRadius = "8px"; // Border radius
        img.style.marginTop = "50px"; // Optional margin
        label.parentNode.appendChild(img);
    };
    fileReader.readAsDataURL(input.files[0]);
}
</script>
</body>
</html>