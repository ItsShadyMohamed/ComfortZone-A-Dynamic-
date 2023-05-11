

<?php
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
 <title>Reserve a Hotel</title>
    <link rel="stylesheet" href="../StyleSheet.css" />
</head>
<body class="Reserve">
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
<div class="container">
<h1>Have you decided where to ?</h1>
<div class="body1-images">
   <img src="../content/Untitled (400 × 450 px) (450 × 500 px) (1).png" id="alex2"/>
   <img src="../content/Untitled (400 × 450 px) (450 × 500 px).png" id="cairo2" /> 
  <img src="../content/Untitled (400 × 450 px) (450 × 500 px) (3).png" id="sharm2"  />
   <img src="../content/Untitled (400 × 450 px) (450 × 500 px) (2).png"  id="luxor2"/>
  </div> 
  <div class="complete-reservation"   >
  <h1>Complete your reservation</h1>
  <div class="bigContainer">
 <div class="input-container">  
  <form class="reservationForm" method="post" action="Reservation details.php">
    <div id="hotels">
    <label>Which hotel</label>
    <select name="hotel">
      <option value="Comfort Zone, Cairo,......">Comfort Zone, Saray El, Gezira St, Omar Al Khayam, Zamalek, Cairo Governorate 11211</option>
      <option value="Comfort Zone, Alexandria,......">Comfort Zone, 31, Victor Amanoiel Square, Alexandria Governorate</option>
      <option value="Comfort Zone, Luxor">Comfort Zone, Salah Al Din Al Ayoubi, Luxor City, Luxor, Luxor Governorate 1364225</option>
      <option value="Comfort Zone, Sharm el-Sheikh">Comfort Zone, El-Shaikh Zayed St, Qesm Sharm Ash Sheikh, South Sinai Governorate 46627</option>
    </select></div>
     <label>First Name</label>
     <input type="text" name="first_name" required>
     <label >Last Name</label>
     <input type="text" name="last_name" required><br>
     <label >Email</label>
     <input type="email" name="email" required>
     <label >Phone number</label>
     <input type="tel" name="phone" required><br>
     <label >Country</label>             
            <select name="country" required>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
            <br>
<label >From</label>
<input type="date" name="dateFrom" required>
<label >To</label>
<input type="date" name="dateTo" required>
<div class="rooms-container">
<p>A room for how many guests?</p>
<select name="guests[1]" required>
  <option value="1 Guest">1 Guest</option>
  <option value="2 Guests">2 Guests</option>
  <option value="3 Guests">3 Guests</option>
  <option value="4 Guests">4 Guests</option>
</select>
</div>
<button type="button" id="addRoomBtn">Add a room</button>
<button type="submit" id="submit">Submit</button>
   </form>
</div>
<div class="input-img">
  <img src="../content/comfort zone logo (footer) (400 × 400 px).svg">
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
 </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  //Javascript for the images thar are floating at the beginning of the page
  setTimeout(()=>{
    $('#alex2').addClass('show');
  },100);
  
  setTimeout(() => {
    $('#cairo2').addClass('show');
  }, 300);

  setTimeout(() => {
    $('#sharm2').addClass('show');
  }, 500);

  setTimeout(() => {
    $('#luxor2').addClass('show');
  }, 700);
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
scrolldowntocontainer('alex2','.complete-reservation');
scrolldowntocontainer('cairo2','.complete-reservation');
scrolldowntocontainer('sharm2','.complete-reservation');
scrolldowntocontainer('luxor2','.complete-reservation');
scrolldowntocontainer('contact','.footer');

</script>
<script>
 
 $("#addRoomBtn").on("click", function() {
  // Clone the rooms container
  var clonedRoomsContainer = $(".rooms-container").first().clone();

  // Set the index value of the cloned select element
  var index = $(".rooms-container").length + 1;
  clonedRoomsContainer.find("select").attr("name", "guests[" + index + "]");

  // Create a remove button (X sign)
  var removeBtn = $("<span>", {
    class: "remove-btn",
    text: "X",
    click: function() {
      // Remove the corresponding container when the remove button is clicked
      $(this).parent().remove();
    }
  });

  // Append the remove button to the cloned container
  clonedRoomsContainer.append(removeBtn);

  // Append the cloned container after the last existing container
  clonedRoomsContainer.insertAfter($(".rooms-container").last());
});
</script>

</body>
</html>






































