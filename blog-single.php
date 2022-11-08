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
  $_SESSION['href']="http://localhost/WebFinal/blog-single.php";
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
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li> Place to hear your story</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="https://images.pexels.com/photos/5250727/pexels-photo-5250727.jpeg?cs=srgb&dl=pexels-alberto-capparelli-5250727.jpg&fm=jpg&_gl=1*h77j4q*_ga*NzU1NTMzOTcyLjE2NjY5NjUxNDc.*_ga_8JE65Q40S6*MTY2Njk2NTE1Mi4xLjEuMTY2Njk2NTI1OC4wLjAuMA.." alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="http://localhost/WebFinal/blog-single.php">Ninh Binh an unexpectedly popular destination to go for in 2019</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="http://localhost/WebFinal/blog-single.php">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="http://localhost/WebFinal/blog-single.php"><time datetime="2020-01-01">Dec 20, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="http://localhost/WebFinal/blog-single.php">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  UK lifestyle magazine Woman and Home has picked Ninh Binh as a superb ‘offroad’ destination to hit this year.
Woman and Home, a UK monthly lifestyle magazine for women, says Ninh Binh Province in northern Vietnam is a lesser-known destination that you should touch down this year.


                </p>

                <p>
                  It says that global travelers (45 percent) want to be more adventurous in their choice of destination in 2019 than they were in 2018, and that this could explain why countries like Vietnam and the Philippines have seen a rise in travel to their less prominent attractions recently. Et voluptate cupiditate.
                </p>

                <blockquote>
                  <p>
                    Ninh Binh is a little-visited but truly spectacular area in northern Vietnam and is on the up.
                  </p>
                </blockquote>

                <p>
                  Travel by air-conditioned bus from Hanoi to Tam Coc and ride a Sampan boat to impressive caves. Experience local life as you cycle through picturesque villages, explore ancient temples, and enjoy a Vietnamese lunch. 
                </p>
                <img src="https://images.pexels.com/photos/6136262/pexels-photo-6136262.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid" alt="">

                <h3>Join a unique rowing boat trip to visit three caves, have a Vietnamese lunch and bike to traditional villages.</h3>
                <p>
                  Join a unique rowing boat trip to visit three caves, have a Vietnamese lunch and bike to traditional villages.
                </p>
                <p>
                  Surrounded by stunning landscapes like Tam Coc-Bich Dong, Trang An tourism complex, Bai Dinh pagoda – the biggest pagoda in Vietnam, Cuc Phuong National Park, Van Long Nature Reserve, Hoa Lu Ancient Temple,…, Ninh Binh has so much to offer tourists.
                </p>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-comments">
            <div class="reply-form">
                <h4 >Leave a Reply</h4>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
            </div>
          
<?php
$sql ="SELECT * FROM `comment`";
$result = mysqli_query($conn,$sql);
$lencmt=($result->num_rows)+1;
echo '<h4 class="comments-count" style="margin-top:1rem;">' .$lencmt. '&nbspComments</h4>'
?>            
<?php
  require("user/printfCmt.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!isset($_SESSION["name"])){
    echo '<script> alert("Bạn cần đăng nhập tài khoản") </script>';
  }
  
  else {
  
      if(!isset($_POST['comment'])||empty($_POST['comment'])){
        echo '<script> alert("Comment không được để trống") </script>';
      }
      else{
          date_default_timezone_set("Asia/Ho_Chi_Minh");
             function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          $time= date("H:i:sa");
          $date= date("Y-m-d");
          $comment=test_input($_POST['comment']);
          $name=$_SESSION['name'];
          if(strlen($comment)!=0&&isset($comment)){
              $query ="INSERT INTO comment(`name`,`comment`,`date`,`time`) VALUES('".$name."','".$comment."','".$date."','".$time."')";
              mysqli_query($conn, $query); 
              echo '<script>window.location.href="http://localhost/WebFinal/blog-single.php" </script>';
          }
      
      }
  }
}
?>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="https://images.pexels.com/photos/1472999/pexels-photo-1472999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">28 Jan, 2022</time>
                    <p>
                     Worth trying! Here is the first place I chose to start my journey! 
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->

              

            </div><!-- End blog comments -->
    </section><!-- End Blog Single Section -->

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