<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> TOURISM WEBSITE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <?php
  session_start();
  $_SESSION['href']="http://localhost/WebFinal/index.php";
  $servername = "localhost";
  $database = "dangnhap";
  $username = "root";
  $password = "";
  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
 ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="width:100vw;">
    <div style="width:100%;display:flex;justify-content:flex-end;z-index:2;">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a id="jshome" style="color:#a2cce3;" onmousemove="mouseon(1)" onmouseout="mouseout(1)" class="active" href="index.php">Home</a></li>
          <li><a id="jsab"  style="color:black;" onmousemove="mouseon(2)" onmouseout="mouseout(2)"  href="about.php">About</a></li>
          <li><a id="jsdes"  style="color:black;" onmousemove="mouseon(3)" onmouseout="mouseout(3)" href="team.php">Destination</a></li>
          <li><a id="jsblog"  style="color:black;" onmousemove="mouseon(4)" onmouseout="mouseout(4)" href="blog.php">Blog</a></li>
          <li><a id="jscon"  style="color:black;" onmousemove="mouseon(5)" onmouseout="mouseout(5)" href="contact.php">Contact Us</a></li>
        </ul>
        <?php
              if(isset($_SESSION["name"])){
                if($_SESSION["name"]!=NULL){
                  echo '<div style="display:flex;flex-direction:row;"><a id="jsname" style="color:#FFCC5C;">'.$_SESSION["name"].'</a><a style="color:#FFCC5C;margin-right:5rem;" onmousemove="mouseon(6)" onmouseout="mouseout(6)" id="jslogout" href="http://localhost/WebFinal/user/logout.php">Logout</a></div>';
                }
              }
              else  {echo '<a id="jslogin" style="color:#FFCC5C;" onmousemove="mouseon(7)" onmouseout="mouseout(7)" href="http://localhost/WebFinal/user/login.php"> Login </a> 
                          <a id="jssignup" style="color:#FFCC5C;margin-right:5rem;" onmousemove="mouseon(8)" onmouseout="mouseout(8)" href="http://localhost/WebFinal/user/signup.php"> Sign Up </a>';}
          ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>GROUP 8</span></h2>
          <p class="animate__animated animate__fadeInUp">Almost every tourist these days is making decisions about their travels based on what they see online. From themed trips to budgeted food tours, travelers crave previews of potential destinations and surf the internet to learn anything they can about a new and exciting spot.</p>
        </div>
      </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>There are so many amazing places around the globe to see, we couldn't possibly include them all in just one list. But, these breathtaking destinations are definitely worth bumping to the top of your travel bucket list – whether you're looking to relax on a beach, get off the grid or explore a new international city - these are the most breathtaking locations to consider.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="https://images.pexels.com/photos/2915957/pexels-photo-2915957.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Forbidden City - China </h3>
            <p class="fst-italic">
              It might well be a cliche and a tourist trap, but that shouldn’t turn you off too much from seeing the largest palatial structure in the world. Besides, if you’re in Beijing, you’re not exactly going out of your way to see it seeing as it’s in the heart of the city.

            </p>
            <p>
              The Forbidden City was constructed from 1406 to 1420, and was the former Chinese imperial palace and winter residence of the Emperor of China from the Ming dynasty (since the Yongle Emperor) to the end of the Qing dynasty, between 1420 and 1924. The Forbidden City served as the home of Chinese emperors and their households and was the ceremonial and political center of the Chinese government for over 500 years. 
    
            </p>
          </div>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="https://images.pexels.com/photos/2132057/pexels-photo-2132057.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Ladder field - Vietnam </h3>
            <p class="fst-italic">
              Mu Cang Chai is located at the foot of the Hoang Lien Son mountain range. To get to this place, you have to cross the Khau Pha Pass, one of the most winding and dangerous passes in the country. But this is completely worth it: Mu Cang Chai has the most stunning rice terraces in Vietnam.
            </p>
            <p>
              Although terraced rice fields can be found almost everywhere in the Ban Xat District, the most beautiful can be found in Y Ty. In recent years the terraced rice fields of Y Ty have become known in the photography communities.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Pham Van Dong Street <br>
              Ha Noi Capital, HN 535022<br>
              Vietnam <br><br>
              <strong>Phone:</strong> +84 123 456 789 <br>
              <strong>Email:</strong> webgroup8@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Group 8</h3>
            <p>"There is a spiritual aspect to our lives - when we give, we receive - when a business does something good for somebody, that somebody feels good about them!" </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/scrollindex.js"></script>
</body>

</html>