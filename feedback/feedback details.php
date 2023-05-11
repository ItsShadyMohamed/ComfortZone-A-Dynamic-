<link rel="stylesheet" type="text/css" href="../StyleSheet.css">


<?php
$mysqli = mysqli_connect("localhost","root","","comfortzone_database");
session_start();
/*$sql= "CREATE TABLE `comfortzone_database`.`feedback_details` (
    reservation_id CHAR(12) PRIMARY KEY DEFAULT UUID(),
    `user_id` int(100) NOT NULL,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `date_from` date NOT NULL,
    `date_to` date NOT NULL,
    `feedback` varchar(255) NOT NULL,
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $user_id= $_SESSION['user_id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $dateFrom = $_POST['dateFrom'];
    $dateTo = $_POST['dateTo'];
    $feedback= $_POST['feedback-text'];  
    $sql = "INSERT INTO feedback_details (user_id, first_name, last_name, email, date_from, date_to, feedback) VALUES ('$user_id', '$firstName', '$lastName', '$email', '$dateFrom', '$dateTo', '$feedback')";

    // Execute the query
    if(mysqli_query($mysqli, $sql)) {
        echo '<h1> Thank you for giving us the opportunity to be better ! </h1>' ;
        echo '<script>
        setTimeout(function() {
            window.location.href = "../Home/Home page.php";
        }, 3500);
    </script>' ;
    } else {
        echo "Error inserting data: " . mysqli_error($mysqli);
    }
}