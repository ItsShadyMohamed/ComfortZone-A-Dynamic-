
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
 <title>Comfort zone hotel</title>
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

    <div class="container">
 <img src="../content/Untitled (1920 × 400 px) (1920 × 450 px) (1920 × 500 px) (1920 × 600 px).svg" class="scrollable-images active" >
   <img src="../content/A lifetime hotel experience.svg" class="scrollable-images" />
        <img src="../content/Comfort zone hotel (1).svg" class="scrollable-images" />      
        <form method="GET" action="search.php">
  <div class="search-box"><label for="city search"></label>
  <input type="search"  id="search" name="search" placeholder="Search for a city or a hotel">
  <button type="submit">Search</button> 
            </div>
</form>
        <h1>Now where to find your comfort</h1>
        <div class="img-container">
        <img src="../content/Untitled (400 × 450 px) (450 × 500 px) (1).png" onclick="window.location.href='../Destinations/Alexandria.php'" id="alex" />
            <img src="../content/Untitled (400 × 450 px) (450 × 500 px).png" onclick="window.location.href='../Destinations/CAIRO.php'" id="cairo" />
             </div>
       <div class="img-container-2">
           <img src="../content/Untitled (400 × 450 px) (450 × 500 px) (3).png" onclick="window.location.href='../Destinations/SHARM EL-SHEIKH.php'" id="sharm" />
           <img src="../content/Untitled (400 × 450 px) (450 × 500 px) (2).png" onclick="window.location.href='../Destinations/Luxor.php'" id="luxor" />
        </div> 
        <div class="body1">
            <h1>Experience the beauty of Egypt</h1>
            <video controls >
                <source src="../content/Let's Go - Egypt.mp4" />
            </video>
        </div>
        <div class="body2">
            <img src="../content/RR-Standard-2-Queen.jpg" id="room" />
            <div class="body2text"><h1>Open your camera</h1>
            <p><p>As you will start vloggig from</p> <p id="f1">the moment you step</p> <p id="f2">into the room</p>
                <p>
            </div>
        </div>
        <div class="body3">
              <div class="body3text">
                <h1>The View is all that <i>matters</i></h1>
                 <p> a breathtaking view that would</p> <p id="f1"> make you witness every  </p> <p id="f2"> sunset and sunrise </p>              
            </div>
            <img src="../content/View.jpg"id="view" />
        </div>
            <div class="body4">              
                    <h1>Don't expect less than perfectionism</h1>   
                <h1>From our services</h1>
               <img src="../content/pexels-cottonbro-6466283-scaled.jpg " id="services" />
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
    </div>
  


    <script>
        var currentindex = 0;
        function showimage(n) {
            var images = document.querySelectorAll('.scrollable-images');
            currentindex += n;
            if (currentindex >= images.length) {
                currentindex = 0;
            }
            if (currentindex < 0) {
                currentindex = images.length - 1;
            }
            for (var i=0; i < images.length; i++) {
                images[i].classList.remove('active');
            }
            images[currentindex].classList.add('active');
        }
        function autoSwitchImages() {
  showimage(1); 
        }
        var intervalId = setInterval(autoSwitchImages, 3500);
       /////////////////////////////////////////////////////
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


