<?php
include '../config.php';
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
  // Redirect to login page
  header("Location: ../login and sign in data base/home.php");
  exit();
}

$current_time = time();

// Check if the "time_on_site" cookie is set
if(isset($_COOKIE['time_on_site'])) {
  // If the cookie is set, retrieve its value and add the current time to it
  $time_on_site = $_COOKIE['time_on_site'];
  $time_on_site += ($current_time - $_COOKIE['last_time']);
} else {
  // If the cookie is not set, set its value to 0
  $time_on_site = 0;
}

// Set the "time_on_site" cookie with the updated value and the current time
setcookie("time_on_site", $time_on_site, time()+3600, "/");
setcookie("last_time", $current_time, time()+86400, "/");
/*echo "You have spent " . $time_on_site . " seconds on this site.";*/
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Earn your comfort and enjoy the luxurious hotel experience ever" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Comfort zone hotel - My reservations</title>
    <link rel="stylesheet" href="../StyleSheet.css" />
</head>
<body>
<header>
        <img src="../content/comfort zone logo (brown) (3).svg" />
     <nav>
      <ul>
        <li><a href="../Home/Home page.php" class="header-link">Home</a></li>
        <li><a  href="../reservations/Reserve a Hotel page.php" class="header-link">Reserve a Hotel</a></li>
        <li><a href="#" class="header-link" id="contact">Contact</a></li>
          <li ><a href="../feedback/feedback.php" class="header-link">Feedback</a></li>
          <li ><a href="../reservations/My reservations.php" class="header-link">My reservations</a></li>
      </ul>
    </nav>      
    <div class="Sign-in-up">
        <!--- Check if user is logged in --->
        <?php 
          
           if(isset($_SESSION['user_id'])){
               $user_id = $_SESSION['user_id'];
               
       ?>
       <div class="register" onclick="window.location.href='../login and sign in data base/update_profile.php'">Profile</div>
       <div class="log-in" onclick="window.location.href='../login and sign in data base/home.php'">Log out</div>
       <?php } else { ?>
       <!--- Show sign up and log in options if user is not logged in --->
       <div class="register" onclick="window.location.href='../login and sign in data base/register.php'">Sign up</div>
       <div class="log-in" onclick="window.location.href='../login and sign in data base/home.php'">Log in</div>
       <?php } ?>
   </div>     
   
        </header>


<?php

           if(isset($_SESSION['user_id'])){
               $user_id = $_SESSION['user_id'];
           
           
$sql= "SELECT reservation_id, hotel, first_name, last_name, email, phone, country, date_from, date_to, guests_per_room FROM reservations WHERE user_id= '$user_id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // User has reservations, display them
  echo '<div class="reservation_details">';
  echo '<h1> Your reservation details </h1>';
  echo '<table class="reservation-table">';
  echo '<tr><th>Reservation ID</th><th>Hotel</th><th>Name</th><th>Email</th><th>Phone</th><th>Country</th><th>Check-in Date</th><th>Check-out Date</th><th>Guests per room</th></tr>';
  
  while($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row["reservation_id"] . '</td>';
    echo '<td>' . $row["hotel"] . '</td>';
    echo '<td>' . $row["first_name"] . ' ' . $row["last_name"] . '</td>';
    echo '<td>' . $row["email"] . '</td>';
    echo '<td>' . $row["phone"] . '</td>';
    echo '<td>' . $row["country"] . '</td>';
    echo '<td>' . $row["date_from"] . '</td>';
    echo '<td>' . $row["date_to"] . '</td>';
    echo '<td>' . $row["guests_per_room"] . '</td>';
    echo '<td>' . '<form action="cancel_reservation.php" method="post"><input type="hidden" name="reservation_id" value="' . $row["reservation_id"] . '"><button type="submit" id="cancel_reservation" onclick="return confirm(\'Are you sure you want to cancel this reservation?\')">Cancel The Reservation</button></form>' . '</td>';
    echo '</tr>';
  }
  echo '</table>';
  echo '</div>';
}
 else {
  // User has no reservations
  echo '<div class="no_reservations"> <h1>You have no reservations</h1>';
  echo '</div>';
}
}

?>
  <div class="footer">
            <table class="footer-table">
      <tr>
        <th>Destinations</th>
        <th>Contact</th>    
      </tr>
      <tr>
        <td><a href="../Destinations/CAIRO.php" class="footer-link">Cairo</a></td>
        <td><a href="#" class="footer-link">&#9993;  support@comfortzone.com</a></td>    
      </tr>
      <tr>
        <td><a href="../Destinations/Alexandria.php" class="footer-link">Alexandria</a></td>
        <td><a href="#" class="footer-link">&#9742;  +12 123456789</a><td>
      </tr>
      <tr>
        <td><a href="../Destinations/SHARM EL-SHEIKH.php" class="footer-link">Sharm el-Sheikh</a></td>
        <td><a href="../feedback/feedback.php" class="footer-link">Submit a Complain</a></td>
      </tr>
      <tr>
        <td><a href="../Destinations/Luxor.php" class="footer-link">Luxor</a></td>        
      </tr>   
    </table>
          <div class="image-container"><img src="../content/comfort zone logo (footer) (400 × 400 px).svg" /></div> 
        </div>


        <script>
                    function scrolldowntocontainer (elementid,target){
  document.getElementById(elementid).addEventListener('click', function() {
    const scrollToContainer = document.querySelector(target);
    const offsetTop = scrollToContainer.offsetTop;

    window.scrollTo({
        top: offsetTop,
        behavior: 'smooth'
    });
});
}
scrolldowntocontainer('contact','.footer');
        </script>
</body>   
</html>