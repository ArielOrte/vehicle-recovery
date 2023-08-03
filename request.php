<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "car_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(!empty($_SESSION["id"])){
  header("Location: report.php");
}

// Retrieve user input from form
if(isset($_POST["submit"])){
$email = $_POST['email'];
$phone = $_POST['phone'];
$vehicle_make = $_POST['vehicle_make'];
$vehicle_model = $_POST['vehicle_model'];
$vehicle_year = $_POST['vehicle_year'];
$location = $_POST['location'];

// Insert user request into database
$sql = "INSERT INTO requests (email, phone, vehicle_make, vehicle_model, vehicle_year, location, status)
        VALUES ('$email', '$phone', '$vehicle_make', '$vehicle_model', '$vehicle_year', '$location', 'pending')";

if (mysqli_query($conn, $sql)) {
  echo "Request submitted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />

    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <header class="header">
      <a href="site.php" class="logo"> <i class="fas fa-car-crash"></i> CarHelp </a>
      <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
      </div>

      <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here.." />
        <label for="search-box" class="fas fa-search"></label>
      </form>
    </header>

    <!-- header section ends -->
    <section class="register" id="register">
    <div class="form-container">
    <form class="register-form" action="" method="post" autocomplete="off">
    <h3>Request For Help</h3>
    <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>

  <label for="phone">Phone:</label>
  <input type="tel" name="phone" id="phone" required>

  <label for="vehicle_make">Vehicle Make:</label>
  <input type="text" name="vehicle_make" id="vehicle_make" required>

  <label for="vehicle_model">Vehicle Model:</label>
  <input type="text" name="vehicle_model" id="vehicle_model" required>

  <label for="vehicle_year">Vehicle Year:</label>
  <input type="text" name="vehicle_year" id="vehicle_year" required>
 
  <label for="location">Select your location:</label>
  <select name="location" id="location">
      <option value="dagoretti">dagoretti</option>
      <option value="embakasi">embakasi</option>
      <option value="kasarani">kasarani</option>
      <option value="kamukunji">kamukunji</option>
      <option value="kibra">kibra</option>
      <option value="lang'ata">lang'ata</option>
      <option value="makadara">makadara</option>
      <option value="mathare">mathare</option>
      <option value="roysambu">roysambu</option>
      <option value="ruaraka">ruaraka</option>
      <option value="starehe">starehe</option>
      <option value="westlands">westlands</option>
            <!-- Add more location options here if needed -->
  </select>
        <br>

      <button type="submit" name="submit" style="background-color: crimson; color: #f1f1f1; font-size: 20px">Apply</button> <br>
      <p>Already requested?<a href="report.php">View status</a></p><br>
    </form>
    </div>
    </section>
    

        <!--footer section starts-->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>CarHelp <i class="fas fa-car-crash"></i></h3>
          <p>You are always welcome to great service here at CarHelp</p>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
       </div>

          <div class="box">
            <h3>Contact Info</h3>
            <a href="#" class="links">
              <i class="fas fa-phone"></i>+254-702-178-772</a
            >
            <a href="#" class="links">
              <i class="fas fa-phone"></i>+254-722-757-597</a
            >
            <a href="#" class="links">
              <i class="fas fa-envelope"></i>carhelp@gmail.com</a
            >
            <a href="#" class="links">
              <i class="fas fa-map-maker-alt"></i>nairobi, kenya - 00400</a
            >
          </div>

          <div class="box">
            <h3>Quick links</h3>
            <a href="#" class="links">
              <i class="fas fa-arrow-right"></i>home</a
            >
            <a href="#" class="links">
              <i class="fas fa-arrow-right"></i>features</a
            >
            <a href="#" class="links">
              <i class="fas fa-arrow-right"></i>services</a
            >
          </div>

          <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email" />
            <input type="submit" value="subscribe" class="btn" />
            <img
              src="../mid-project/image/Payment_Options.jpg"
              class="payment-img"
              alt=""
            />
          </div>
      </div>

      <div class="credit"></div>
    </section>

    <!--footer section ends-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>
  </body>
</html>