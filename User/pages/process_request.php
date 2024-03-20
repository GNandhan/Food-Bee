<?php
session_start(); // Start the session

// Ensure user is logged in and user_id is set in the session
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or handle the situation appropriately
    header("Location: login.php");
    exit; // Terminate script execution after redirecting
}

// Include the database connection file
include './connect.php';

// Process the form submission
if (isset($_POST['submit_request'])) {
    // Retrieve data from the form
    $food_id = $_POST['food_id'];

    // Ensure user_id is already fetched from session
    if(isset($_POST['user_id'])){
        $user_id = $_POST['user_id'];
    } else {
        echo "User ID not found in form data.";
        exit; // Exit the script if user_id is not found
    }
    
    // Add other data if needed

    // Insert data into the request table
    $query = "INSERT INTO `request`(`request_id`, `request_date`, `food_id`, `user_id`, `request_status`) VALUES (NULL, NOW(), '$food_id', '$user_id', 'pending')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Request successfully submitted
        echo "Request submitted successfully!";
    } else {
        // Error handling
        echo "Error: " . mysqli_error($conn);
    }
}
?>
