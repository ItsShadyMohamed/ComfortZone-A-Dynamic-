<link rel="stylesheet" type="text/css" href="../StyleSheet.css">


<?php
$mysqli = mysqli_connect("localhost","root","","comfortzone_database");
session_start();
/*$sql= "CREATE TABLE `comfortzone_database`.`reservations` (
    reservation_id CHAR(12) PRIMARY KEY DEFAULT UUID(),
    `user_id` int(100) NOT NULL,
    `hotel` varchar(255) NOT NULL,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `country` varchar(255) NOT NULL,
    `date_from` date NOT NULL,
    `date_to` date NOT NULL,
    `guests_per_room` varchar(255) NOT NULL,
    FOREIGN KEY (`user_id`) REFERENCES `comfortzone_database`.`user_form`(`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  */

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $user_id= $_SESSION['user_id'];
    $hotel= $_POST['hotel'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $dateFrom = $_POST['dateFrom'];
    $dateTo = $_POST['dateTo'];
    $guests= $_POST['guests'];  
    $guestsString = implode(', ', $guests);
    $sql = "INSERT INTO reservations (user_id, hotel, first_name, last_name, email, phone, country, date_from, date_to, Guests_Per_Room) VALUES ('$user_id', '$hotel', '$firstName', '$lastName', '$email', '$phone', '$country', '$dateFrom', '$dateTo', '$guestsString')";
    
    // Execute the query
    if(mysqli_query($mysqli, $sql)) {
        echo '<div class="successful">
        <h1> Your reservation is booked successfully </h1>
         <video autoplay muted id="check-in">
        <source src="../content/1079186591-preview.mp4" />
        </video>
        <h1> We are waiting for you ! </h1>
        </div>';
        echo '<script>
        setTimeout(function() {
            window.location.href = "My reservations.php";
        }, 6500);
        var myVideo = document.getElementById("check-in");
    myVideo.playbackRate = 1.5;
    </script>' ;
    } else {
        echo "Error inserting data: " . mysqli_error($mysqli);
    }
}
?>
