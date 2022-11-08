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
  $_SESSION['href']="http://localhost/WebFinal/blog.php";
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
          <li><a id="jsblog"  style="color:#a2cce3;" onmousemove="mouseon(4)" onmouseout="mouseout(4)" href="blog.php">Blog</a></li>
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
  </header><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<body>


  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="https://images.pexels.com/photos/5250727/pexels-photo-5250727.jpeg?cs=srgb&dl=pexels-alberto-capparelli-5250727.jpg&fm=jpg&_gl=1*h77j4q*_ga*NzU1NTMzOTcyLjE2NjY5NjUxNDc.*_ga_8JE65Q40S6*MTY2Njk2NTE1Mi4xLjEuMTY2Njk2NTI1OC4wLjAuMA.." alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="http://localhost/WebFinal/blog-single.php">Ninh Binh an unexpectedly popular destination to go for in 2019</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="http://localhost/WebFinal/blog-single.php">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="http://localhost/WebFinal/blog-single.php"><time datetime="2020-01-01">Dec 20, 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="http://localhost/WebFinal/blog-single.php">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  According to the magazine, Ninh Binh is a little-visited but truly spectacular area in northern Vietnam and is on the up.

                  Its azure river has karsts rock formations, scattered with caves and topped with lush green foliage, and is a serene place for a slow cruise in a small boat.

                  Summer time sees the landscape turn golden as the rice fields change color in the burning sun.
                </p>
                <div class="read-more">
                  <a href="http://localhost/WebFinal/blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="https://images.pexels.com/photos/773471/pexels-photo-773471.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="http://localhost/WebFinal/blog-single.php">An area of low-lying marshy woodlands with a mainly flat topography</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="http://localhost/WebFinal/blog-single.php">Phuongg Thao</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="http://localhost/WebFinal/blog-single.php"><time datetime="2020-01-01">Jan 1, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="http://localhost/WebFinal/blog-single.php">20 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Berlin lies in northeastern Germany, east of the River Elbe, that once constituted, together with the River (Saxon or Thuringian) Saale (from their confluence at Barby onwards), the eastern border of the Frankish Realm. While the Frankish Realm was primarily inhabited by Germanic tribes like the Franks and the Saxons, the regions east of the border rivers were inhabited by Slavic tribes. This is why most of the cities and villages in northeastern Germany bear Slavic-derived names (Germania Slavica).
                </p>
                <div class="read-more">
                  <a href="http://localhost/WebFinal/blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="https://images.pexels.com/photos/1634278/pexels-photo-1634278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="http://localhost/WebFinal/blog-single.php">Times Square - referred as "the Crossroads of the World".</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="http://localhost/WebFinal/blog-single.php">王不染</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="http://localhost/WebFinal/blog-single.php"><time datetime="2020-01-01">Feb 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="http://localhost/WebFinal/blog-single.php">10 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Times Square is a major commercial intersection, tourist destination, entertainment hub, and neighborhood in Midtown Manhattan, New York City. It is formed by the junction of Broadway, Seventh Avenue, and 42nd Street.
                </p>
                <div class="read-more">
                  <a href="http://localhost/WebFinal/blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="https://images.pexels.com/photos/1933320/pexels-photo-1933320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="http://localhost/WebFinal/blog-single.php">Northern Lights in Iceland - When & Where To See the Aurora</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="http://localhost/WebFinal/blog-single.php">Unknown User</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="http://localhost/WebFinal/blog-single.php"><time datetime="2020-01-01">Oct 10, 2010</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="http://localhost/WebFinal/blog-single.php">5 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The northern lights, also known as the aurora borealis, are the visible result of solar particles entering the Earth’s magnetic field and ionizing high in the atmosphere. The ionization gives them their colors, usually green, but occasionally purple, red, pink, orange, and blue.

                  But solar activity isn’t reliable and can be sporadic.
                </p>
                <div class="read-more">
                  <a href="http://localhost/WebFinal/blog-single.php">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->
        </div>
      </div>
    </section><!-- End Blog Section -->

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
  <script src="assets/js/scrollblog.js"></script>

</body>

</html>