<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Roadside Assistance</title>

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
      <nav class="navbar">
        <a href="site.php">home</a>
        <a href="#features">features</a>
        <a href="#services">services</a>
      </nav>

      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
      </div>

      <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here.." />
        <label for="search-box" class="fas fa-search"></label>
      </form>

    </header>

    <!-- header section ends -->

    <!-- home section begins -->

    <section class="home" id="home">
      <div class="content">
        <h3>Get help <span>with Our Reliable</span> Roadside Assistance Services</h3>
        <p>
        Being stranded on the side of the road due to a vehicle breakdown can be a frustrating and
        stressful experience. Fortunately, our roadside assistance services are here to help you get
        back on the road as quickly and safely as possible. Whether you have a flat tire, a dead
        battery, or have locked yourself out of your car, we are just a phone call away.
        </p>
      </div>
    </section>

    <!-- home section ends here-->

    <!-- offers section starts here-->

    <section class="offers" id="offers">
      <div class="content">
        <h3>Our team provides a wide range of roadside assistance services, including:</h3>
        <ul>
  <li>Fuel delivery</li>
  <li>Jump-start</li>
  <li>Flat tire change</li>
  <li>Lockout service</li>
  <li>Battery replacement</li>
  <li>Winching and extrication</li>
</ul>

      </div>
    </section>


    <!-- offers section ends here-->

    <!--description section starts-->

    <section class="description" id="description">
      <div class="content">
        <p>
        We pride ourselves on our exceptional customer service and work to exceed your expectations. 
        Our team of trained professionals is dedicated to ensuring your safety and peace of mind on the road. 
        Contact us today to learn more about our services and how we can help you get back on the road with ease
        </p>
      </div>
    </section>

    <!--description section ends-->

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