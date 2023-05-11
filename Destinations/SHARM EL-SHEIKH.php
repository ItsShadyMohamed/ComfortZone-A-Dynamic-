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
    <title>Comfort Zone - Sharm el-sheikh</title>
    <link rel="stylesheet" href="sharm el-sheikh.css"> <!-- Link to the external CSS file -->
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
        <h2>Welcome to Sharm El-sheikh</h2>
    </section>
    <section class="section2">
        <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/321956623.jpg?k=636f9a6c7ec33b83cc2dd472ae4dfbadc386477ecb2cb4e5a475e48de39b546d&o=">
        <p> Naama Bay is a popular tourist area located in the heart of Sharm El Sheikh. The bay is known for its clear waters and coral reefs, making it a great destination for snorkeling and diving. It's also home to a wide variety of restaurants, bars, and shops, making it a great place to spend an evening out.</p>
    </section>
    <div class="white-section">
  <div class="content-wrapper">
    <div class="text-section">
      <h1>Ras Mohammed National Park </h1>
      <p> Ras Mohammed National Park is a protected area located at the southern tip of the Sinai Peninsula, near Sharm El Sheikh. The park is home to a diverse array of marine life and coral reefs, making it a popular destination for snorkeling and diving.</p>
    </div>
    <div class="image-section">
      <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/06/74/91/9f.jpg" alt="Image">
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
      <h1>St. Catherine's Monastery</h1>
      <p>  St. Catherine's Monastery is located at the foot of Mount Sinai, approximately a two-hour drive from Sharm El Sheikh. The monastery is one of the oldest working monasteries in the world and is home to a wealth of religious artifacts and manuscripts. The surrounding area is also home to several hiking trails, making it a great destination for outdoor enthusiasts.</p>
          </div>
    <div class="image-section">
      <img src="https://lp-cms-production.imgix.net/2019-06/efacfaef2fff5a7c0ebb1dfae4663e61-st-katherine-s-monastery.jpg?auto=format&w=640&h=360&ar=16:9&fit=crop&crop=center&format=auto&q=75" alt="Image">
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
    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/262945448.jpg?k=b4af89dda011c4efed6112ca20a87dd38603ef1c163ded850a30b40814a12855&o=&hp=1" alt="hotel view">
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
