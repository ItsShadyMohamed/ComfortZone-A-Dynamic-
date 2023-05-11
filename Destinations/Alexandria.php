<?php
include '../config.php';
session_start();
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
    <title>Comfort Zone - Alexandria</title>
    <link rel="stylesheet" href="alexandria.css"> <!-- Link to the external CSS file -->
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

    <section class="section">
        <h2>Welcome to Alexandria</h2>
    </section>
    <section class="section2">
        <img src="https://d1b3667xvzs6rz.cloudfront.net/2019/07/Bibliotheca-Alexandrina.jpg">
        <p> The Bibliotheca Alexandrina is a modern library and cultural center located in Alexandria. It was built in 2002 to replace the ancient Library of Alexandria, which was one of the largest and most famous libraries of the ancient world. The modern library contains millions of books and is a popular destination for book lovers and history buffs.</p>
    </section>
    <div class="white-section">
  <div class="content-wrapper">
    <div class="text-section">
      <h1>Citadel of Qaitbay</h1>
      <p> The Citadel of Qaitbay is a 15th-century fortress located on the Mediterranean coast in Alexandria. It was built by Sultan Al-Ashraf Sayf al-Din Qaitbay to protect the city from invading forces. Today, the fortress is a popular tourist attraction and offers great views of the sea and the surrounding area.</p>
    </div>
    <div class="image-section">
      <img src="https://www.egypttoursportal.com/images/2018/07/Qaitbay-Citadel-Egypt-Tours-Portal.jpg" alt="Image">
    </div>
  </div>
</div>
<div class="black-section">
  <div class="video-wrapper">
    <video src="vid.mp4" controls ></video>
  </div>
</div>
<div class="white-section">
  <div class="content-wrapper">
    <div class="text-section">
      <h1>Montaza Palace </h1>
      <p>  Montaza Palace is a beautiful palace and gardens located on the eastern outskirts of Alexandria. It was built in the early 20th century as a summer residence for the Egyptian royal family. The palace and gardens offer stunning views of the Mediterranean and are a great place to relax and enjoy the scenery.</p>
          </div>
    <div class="image-section">
      <img src="https://www.islamicarchitecturalheritage.com/wp-content/uploads/2020/06/montaza-palace.jpg" alt="Image">
    </div>
  </div>
</div>
<section class="section2">
        <img src="https://dam-assets.au.reastatic.net/images/w_800,h_509/v1662426833/news-lifestyle-content-assets/wp-content/production/Bedroom_1_19775c0792/Bedroom_1_19775c0792.jpg?_i=AA">
           <p>Our hotel is dedicated to providing our guests with the most comfortable stay possible. We understand that a good night's sleep is essential to a successful trip, and we do everything in our power to ensure that our guests are able to rest easy. From our luxurious bedding to our noise-reducing windows, we've thought of everything to make your stay as comfortable as possible.</p>
    </section>
   <div class="white-section">
  <div class="content-wrapper">
    <div class="text-section">
      <h1>A Magnificent View </h1>
      <p> Our hotel boasts an unparalleled view that is sure to leave you in awe.
          From the comfort of your room, you'll be treated to a stunning vista that captures the beauty of the surrounding area.
          Whether you're here to relax or explore, our hotel's breathtaking view is the perfect backdrop to your stay.</p>
  </div>
  <div class="image-section">
    <img src="https://pix8.agoda.net/hotelImages/242851/-1/d0935fe60294e3eb8348b89471603d94.jpg?ca=7&ce=1&s=1024x768" alt="hotel view">
  </div>
  </div>
  </div>
 <div style="border: 1px solid gray; padding: 10px; width: 200px; margin: 0 auto; text-align: center; color: white; text-transform: uppercase; font-size: large; background-color: rgb(33,23,23);">
  <a style="text-decoration: none; color: inherit;" href="../reservations/Reserve a Hotel page.php">Book a hotel</a>
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
