<?php
include '../config.php';
session_start();
// Get the current time
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
 <title>Comfort zone hotel - feedback</title>
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

<div class="feedback-container">   
  <h1>Share your feedback</h1>
  <div class="bigContainer">
<div class="feedback-img">
  <img src="../content/comfort zone logo (footer) (400 × 400 px).svg" >
</div>
<div class="feedback-input">
<form method="post" action="feedback details.php">
  <label>First Name</label>
  <input type="text" name="first_name" required>
  <label >Last Name</label>
  <input type="text" name="last_name" required><br>
  <label >Email</label>
  <input type="email" name="email" required>
  <label >Check-In date</label> 
<input type="date" name="dateFrom" required>
<br>
<label >Check-Out date</label>
<input type="date" name="dateTo" required>
<br>
<label>How did you hear about our hotel?</label> <br>
<input type="radio" value="Friends and family"> <label>Friends and family</label> <br>
<input type="radio" value="Social media"> <label>Social media</label> <br>
<input type="radio" value="Adds"> <label>Adds</label> <br>
<input type="radio" value="Other"> <label>Other</label> <br>
<br> 
<label>How did you make you reservation?</label> <br>
<input type="radio" value="Travel Agency"> <label>Travel Agency</label> <br>
<input type="radio" value="Online"> <label>Online</label> <br>
<input type="radio" value="Other"> <label>Other</label> <br>
<table class="feedback-table">
<tr>
  <th>   </th>
<th>Poor</th>
<th>Satisfactory</th>
<th>Good</th>
<th>Very Good</th>
<th>Excellent</th>
</tr>
<tr>
  <th>Service Quality</th>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
</tr>
<tr>
  <th>Cleanlinesss</th>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
</tr>
<tr>
  <th>Food</th>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
</tr>
<tr>
  <th>Staff</th>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
  <td><input type="radio"></td>
</tr>

</table>
<label>How was you overall experience?</label>
<input type="radio" name="rating" id="star1" value="1">
  <label for="star1" class="star">&star;</label>

  <input type="radio" name="rating" id="star2" value="2">
  <label for="star2" class="star">&star;</label>

  <input type="radio" name="rating" id="star3" value="3">
  <label for="star3" class="star">&star;</label>

  <input type="radio" name="rating" id="star4" value="4">
  <label for="star4" class="star">&star;</label>

  <input type="radio" name="rating" id="star5" value="5">
  <label for="star5" class="star">&star;</label>
  <br>
  <br>
<label>Any other suggestions you would like to add?</label>
<br>
<input type="text" name="feedback-text" id="feedback-text" placeholder="Type here....">
<button type="submit" id="submit">Submit</button>
       </form>
       </div>
</div>
       </div>




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