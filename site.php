<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vehicle Breakdown Recovery Website</title>

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
      <nav class="navbar">
        <a href="site.php">home</a>
        <a href="#features">features</a>
        <a href="#services">services</a>
        <a href="report.php">Status report</a>
      </nav>

      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
      </div>

      <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here.." />
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <form action="logout.php" class="login-form">
        <h3>logout <output></output></h3>
        <input type="submit" value="logout" class="btn" />
      </form>
    </header>

    <!-- header section ends -->

    <!-- home section begins -->

    <section class="home" id="home">
      <div class="content">
        <h3>Fast and <span>Reliable</span> help ready for you</h3>
        <p>
          Car Help Services provides roadside assistance for your motor vehicle.
          Roadside Rescue Services applies to the vehicle not the driver, It
          doesn’t matter who is driving. Roadside Rescue is an optional benefit
          available to all our existing and new customers.
        </p>
        <a href="#services" class="btn">Request Now</a>
      </div>
    </section>

    <!-- home section ends here-->

    <!-- features section starts-->
    <section class="features">
      <h1 class="heading">Our <span>features</span></h1>
      <div class="box-container">
        <div class="box">
          <img src="../mid-project/image/istockphoto1.jpg" alt="" />
          <h3>Roadside Assistance</h3>
          <p>
            We offer 24/7 roadside assistance to help stranded drivers get back
            on the road in the easiest and most efficient manner
          </p>
          <a href="roadside.php" class="btn">read more</a>
        </div>

        <div class="box">
          <img
            src="../mid-project/image/Emergency-Tow-Truck-Henry-County1.jpg"
            alt=""
          />
          <h3>Emergency Towing Service</h3>
          <p>
            If the vehicle is beyond repair, we provide emergency towing
            services to take the vehicle to the nearest repair shop
          </p>
          <a href="emergency.php" class="btn">read more</a>
        </div>

        <div class="box">
          <img src="../mid-project/image/competent driver1.jpg" alt="" />
          <h3>Competent Driver</h3>
          <p>
            If the driver is beyond capacity to operate, we provide an on
            request competent driver to drive the vehicle to the nearest repair
            shop
          </p>
          <a href="competence.php" class="btn">read more</a>
        </div>
      </div>
    </section>

    <!-- features section ends-->

    <!--services section satrts-->

    <section class="services" id="services">
      <h1 class="heading">our <span>services</span></h1>

      <div class="swiper service-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="../mid-project/image/tyrechange.jpg" alt="" />
            <h3>Flat Tyre Change</h3>
            <div class="price">Kshs2500.00/- - kshs5000.00/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="request.php" class="btn">select</a>
          </div>

          <div class="swiper-slide box">
            <img src="../mid-project/image/fueldelivery.png" alt="" />
            <h3>Fuel Delivery</h3>
            <div class="price">To be determined</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="request.php" class="btn">select</a>
          </div>

          <div class="swiper-slide box">
            <img src="../mid-project/image/Flatbatteryjumpstart.jpg" alt="" />
            <h3>Battery jumpstart</h3>
            <div class="price">Kshs2500.00/- - kshs5000.00/-</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="request.php" class="btn">select</a>
          </div>

          <div class="swiper-slide box">
            <img src="../mid-project/image/towing.jpg" alt="" />
            <h3>Towing and recovery service</h3>
            <div class="price">To be determined</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="request.php" class="btn">select</a>
          </div>

          <div class="swiper-slide box">
            <img src="../mid-project/image/comdriver.jpg" alt="" />
            <h3>Competent driver</h3>
            <div class="price">To be determined</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="request.php" class="btn">select</a>
          </div>
        </div>
      </div>
    </section>

    <!--services section ends-->
<div class="overlay" id="divOne">
  <div class="wrapper">
    <h3>Please fill up the Form</h3>
    <a href="#" class="close">&times;</a>
    <div class="content">
      <div class="container">
        <form action="">
          <label for="">Car registration No:</label>
          <input type="text" placeholder="Your car reg No">
          <label for="">Car model:</label>
          <input type="text" placeholder="Your car model">
          <input type="submit" value="submit">
        </form>
      </div>

    </div>
  </div>
</div>
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
