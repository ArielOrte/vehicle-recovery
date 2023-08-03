<?php
require 'config.php';
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

      <form action="mechlogout.php" class="login-form">
        <h3>logout <output></output></h3>
        <input type="submit" value="logout" class="btn" />
      </form>
    </header>

    <!-- header section ends -->
    <section class="register" id="register">
    <div class="container1">
    <table class="container1-table">
        <thead>
            <tr>
                <th scope="col">Request ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Vehicle Make</th>
                <th scope="col">Vehicle Model</th>
                <th scope="col">Vehicle Year</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if(!empty($_SESSION["id"])){
                $id = $_SESSION["id"];
                $result = mysqli_query($conn, "SELECT * FROM mechanics WHERE id = $id");
                $row = mysqli_fetch_assoc($result);
                $loc = $row["location"];
              }
              else{
                header("Location: mechlogin.php");
                
              }
              if (mysqli_num_rows($result) > 0) {
                  // Mechanic exists, retrieve pending requests from database
                  $sql = "SELECT * FROM requests WHERE status='pending' and location='$loc'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id =$row["id"];
                    $email =$row['email'];
                    $phone =$row['phone'];
                    $vehicle_make =$row['vehicle_make'];
                    $vehicle_model =$row['vehicle_model'];
                    $vehicle_year =$row['vehicle_year'];
                    $location =$row['location'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$vehicle_make.'</td>
                    <td>'.$vehicle_model.'</td>
                    <td>'.$vehicle_year.'</td>
                    <td>'.$location.'</td>
                    <td>
                    </td>
                  </tr>';
                  echo "<form method='POST' action='process_approval.php'>";
                echo "<input type='hidden' name='request_id' value='" . $row['id'] . "'>";
                echo "<input type='submit' value='Approve Request .$id. '>";
                echo "</form>";
                echo "<hr>";

                }
            } else {
                // Mechanic does not exist, display error message
                echo "Invalid username or password";
              }
              
              mysqli_close($conn);
            

        ?>

        </tbody>
        </table>
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