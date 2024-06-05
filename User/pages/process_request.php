<?php
include './connect.php';
session_start();

if(isset($_POST['submit_request'])) {
    // Get form data
    $food_id = $_POST['food_id'];
    $user_id = $_POST['user_id'];

    // You can set the request_date as the current date/time
    $request_date = date('Y-m-d H:i:s');

    // Set the request_status, assuming it's pending when the request is made
    $request_status = 'pending';

    // Insert the request into the database
    $insert_query = "INSERT INTO `request` (`request_date`, `food_id`, `user_id`, `request_status`) VALUES ('$request_date', '$food_id', '$user_id', '$request_status')";

    if(mysqli_query($conn, $insert_query)) {
        // Request successfully inserted, redirect the user and show an alert message
        echo '<script type="text/javascript">';
        echo 'alert("Request sent successfully!");';
        echo 'window.location = "home.php";';
        echo '</script>';
    } else {
        // Handle the case where insertion fails
        echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
}
?>
