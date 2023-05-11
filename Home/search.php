<?php
include '../config.php'
?>


<?php
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
 <title>Comfort zone hotel - Search results</title>
    <link rel="stylesheet" href="../StyleSheet.css" />
</head>
<body>
<header>
        <img src="../content/comfort zone logo (brown) (3).svg" />
     <nav>
      <ul>
        <li><a href="Home page.php" class="header-link">Home</a></li>
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


<div class="page-h1">
        <h1>Search Results</h1>
       </div>
      <?php
        // Get the search query from the URL parameter
        $city = strtolower($_GET['search']);
        
        // Use the search query to find the corresponding city page
        switch ($city) {
          case "cairo":
            $city_url = "../Destinations/CAIRO.php";
            $city_name = "Cairo";
            $city_description = "Experience the charm of Cairo with a luxurious stay at our hotel. Nestled in the heart of the city, our hotel offers the perfect blend of modern amenities and traditional Egyptian hospitality. Discover the wonders of ancient Egypt and indulge in our world-class facilities during your stay.";
            $city_image = "Untitled (400 × 450 px) (450 × 500 px).png";
            break;
          case "alexandria":
            $city_url = "../Destinations/Alexandria.php";
            $city_name = "Alexandria";
            $city_description = "Discover the charm of Alexandria's Mediterranean coast and indulge in luxurious accommodations at our hotel. Immerse yourself in history and culture with easy access to ancient landmarks and vibrant city life.";
            $city_image = "Untitled (400 × 450 px) (450 × 500 px) (1).png";
            break;
          case "sharm el-sheikh":
            $city_url = "../Destinations/SHARM EL-SHEIKH.php";
            $city_name = "Sharm el-Sheikh";
            $city_description = "Experience the ultimate beach escape in the stunning city of Sharm el-Sheikh, known for its crystal clear waters and picturesque landscapes. Enjoy a luxurious stay at our hotel while exploring all that this beautiful destination has to offer.";
            $city_image = "Untitled (400 × 450 px) (450 × 500 px) (3).png";
            break;
          case "luxor":
            $city_url = "../Destinations/Luxor.php";
            $city_name = "Luxor";
            $city_description = "Experience the splendor of ancient Egypt in the city of Luxor. Stay at our luxurious hotel and immerse yourself in the rich history and vibrant culture of this awe-inspiring destination.";
            $city_image = "Untitled (400 × 450 px) (450 × 500 px) (2).png";
            break;
          default:
            $city_url = "";
            $city_name = "";
            $city_description = "";
            $city_image = "";
            break;
        }
// If the search query matches a city, display the city details in list layout
if ($city_url != "") {
echo '<div class="cont">';
echo '<div class="cont-h2">';

    echo "<h2>$city_name</h2>";
    echo '</div>';
    echo '<div class="cont-img">';
    echo "<img src=\"../content/$city_image\">";
    echo '</div>';
    echo '<div class="cont-p">';
    echo "<p>$city_description</p>";
    echo '</div>';
    echo '<div class="cont-a">';
    echo "<p><a href='{$city_url}'>Learn more about $city_name</a></p>";
    echo '</div>';
    echo '</div>';
} else {
// If the search query does not match a city, display a message
echo "<p>Sorry, no results found for '$city'.</p>";
}
?>

</body>
</html>