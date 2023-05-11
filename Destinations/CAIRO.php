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
    <title>Comfort Zone</title>
    <link rel="stylesheet" href="cairo.css"> <!-- Link to the external CSS file -->
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
        <h2>Welcome to CAIRO</h2>
    </section>
    <section class="section2">
        <img src="https://www.travelandleisure.com/thmb/deOyUeJ_AjSN7tKUxU1inWWViNQ=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/giza-pyramid-EGYPTSECRETS1016-617b2b1b23dd4fd38bc9f365af7235ab.jpg">
        <p> The Great Pyramids of Giza are a UNESCO World Heritage Site and one of the most famous landmarks in Egypt. Located on the outskirts of Cairo, these pyramids are the only surviving Wonder of the Ancient World and are a must-visit attraction for anyone traveling to Cairo</p>
    </section>
    <div class="white-section">
  <div class="content-wrapper">
    <div class="text-section">
      <h1>The Egyptian Museum</h1>
      <p> The Egyptian Museum is home to an extensive collection of artifacts from Ancient Egypt, including mummies, sarcophagi, and ancient Egyptian art. The museum is located in downtown Cairo and is a popular destination for history buffs and anyone interested in ancient Egyptian culture.</p>
  </div>
  <div class="image-section">
    <img src="https://mediacdn.acciona.com/media/bhjegvi4/the-grand-egyptian-museum-wall-rec-com.jpg" alt="Image">
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
        <h1>Khan el-Khalili</h1>
        <p> Khan el-Khalili is a famous bazaar in Cairo that dates back to the 14th century. This bustling market is filled with shops selling everything from spices and jewelry to textiles and souvenirs. It's a great place to shop for unique gifts and experience the hustle and bustle of Cairo's vibrant street life.</p>
      </div>
  <div class="image-section">
    <img src="https://images.memphistours.com/large/b1534407875f02c988af8508b549c705.jpg" alt="Image">
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
    <img src="https://ak-d.tripcdn.com/images/0222y120009fscyze5C6F_R_640_440_R5_D.jpg_.webp" alt="hotel view">
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
