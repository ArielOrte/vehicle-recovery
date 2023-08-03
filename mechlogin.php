<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: mechpage.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM mechanics WHERE email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["mechlogin"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: mechpage.php");
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mechlogin</title>

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
      <a href="home.php" class="logo"> <i class="fas fa-car-crash"></i> CarHelp </a>
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
    <h3>MECHANIC LOGIN</h3>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
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