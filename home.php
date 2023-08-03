<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: site.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["home"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: site.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
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
      <a href="#" class="logo"> <i class="fas fa-car-crash"></i> CarHelp </a>


      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
      </div>

      <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here.." />
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <form action="" class="login-form" method="post">
        <h3>login form</h3>
        <input type="email" placeholder="your email" class="box" name="email" />
        <input
          type="password"
          placeholder="your password"
          class="box"
          name="password"
        />
        <p>Forgot your password <a href="#">click here</a></p>
        <p>Don't have an account <a href="registration.php">create now</a></p><br>
        <button type="submit" name="submit">Login</button>
      </form>
    </header>

    <!-- header section ends -->

    <!-- home section begins -->

    <section class="home" id="home">
      <div class="content">
        <h3>Fast and <span>Reliable</span> help ready for you</h3>
        <p>
          Are you having car trouble and in need of swift assistance? Don't worry, <span>carhelp</span> got you covered. 
          Sign up below to get all our available offers just from the click of a button.
        </p>
        <a href="registration.php" class="btn">SIGN UP!!</a>
      </div>
    </section>

    <!-- home section ends here-->



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
            <a href="adminlogin.php" class="links">
            <i class="fas fa-arrow-right"></i>admin</a
            >
            <a href="mechlogin.php" class="links">
            <i class="fas fa-arrow-right"></i>mech</a
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