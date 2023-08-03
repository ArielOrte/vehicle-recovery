<?php
include 'config.php';
$id=$_GET['update1id'];
$sql="Select * from `mechanics` where id=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$username =$row["user_name"];
$email =$row["email"];
$location = $row["location"];
$number = $row["number"];
$password =$row["password"];

  if(isset($_POST["submit"])){
    $username = $_POST["user_name"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM mechanics WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
      echo
      "<script> alert('Email Has Already Taken'); </script>";
    }else{
      if($password == $confirmpassword){
        $query ="update `mechanics` set user_name = '$username', email = '$email', password = '$password', number = '$number', location = '$location'
        where id = $id";
        $res=mysqli_query($conn,$query);
          if($res){
            //echo "Data updated successfully";
            header("Location:display.php");
          }else{
            echo "Data not updated";
    }
  }
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
      <a href="adminpage.php" class="logo"> <i class="fas fa-car-crash"></i> CarHelp </a>
      <nav class="navbar">
        <a href="adminpage.php">home</a>
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

      <form action="adminlogout.php" class="login-form">
        <h3>logout <output></output></h3>
        <input type="submit" value="logout" class="btn" />
      </form>
    </header>

    <!-- header section ends -->
    <section class="register" id="register">
    <div class="form-container">
    <form class="register-form" action="" method="post" autocomplete="off">
    <h3>Add Mech</h3>
      <label for="user_name">Mechanic name:</label>
      <input type="text" name="user_name" id="user_name" required><br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="number">Phone No:</label>
      <input type="tel" name="number" id="number" required> <br>
      <label for="location">Location:</label>
      <input type="text" name="location" id="location" required> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Update</button> <br>
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