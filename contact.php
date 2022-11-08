<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> CONTACT </title>
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
  $_SESSION['href']="http://localhost/WebFinal/contact.php";
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
    <div style="width:100%;display:flex;justify-content:flex-end;">
      <nav id="navbar" class="navbar">
        <ul>
          <li><a id="jshome" style="color:black;" onmousemove="mouseon(1)" onmouseout="mouseout(1)" class="active" href="index.php">Home</a></li>
          <li><a id="jsab"  style="color:black;" onmousemove="mouseon(2)" onmouseout="mouseout(2)"  href="about.php">About</a></li>
          <li><a id="jsdes"  style="color:black;" onmousemove="mouseon(3)" onmouseout="mouseout(3)" href="team.php">Destination</a></li>
          <li><a id="jsblog"  style="color:black;" onmousemove="mouseon(4)" onmouseout="mouseout(4)" href="blog.php">Blog</a></li>
          <li><a id="jscon"  style="color:#a2cce3;" onmousemove="mouseon(5)" onmouseout="mouseout(5)" href="contact.php">Contact Us</a></li>
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
<body>

 
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Pham Van Dong Street, Ha Noi, HN 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>webgroup8@gmail.com<br>contact.group8@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+84 123 456 789 <br>+9 876 543 210</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
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
<script src="assets/js/scrollcontact.js"></script>
</body>

</html>