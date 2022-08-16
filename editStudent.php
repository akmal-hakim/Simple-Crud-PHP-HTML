<?php

include 'dbconn.php';
$ic = $_GET['ic'];
$query = "Select * from student WHERE ic = '$ic'";
$result = mysqli_query($conn, $query)or die("Query failed");

while ($row4 = mysqli_fetch_array($result)) {
    $name = $row4['name'];
	$username = $row4['username'];
    $ic = $row4['ic'];
    $password = $row4['password'];
    $adress = $row4['adress'];
    $gender = $row4['gender'];
    $email = $row4['email'];
    $class = $row4['class'];
	$age = $row4['age'];
    $telephone = $row4['telephone'];
  }


?>




<script>
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var ic = document.forms["myForm"]["ic"].value;
  var username = document.forms["myForm"]["username"].value;
  var password = document.forms["myForm"]["password"].value;
  var address = document.forms["myForm"]["address"].value;
  var email = document.forms["myForm"]["email"].value;
  var age = document.forms["myForm"]["age"].value;
  var telephone = document.forms["myForm"]["telephone"].value;
  
  if (name == "") {
    alert("Name must be filled out");
    return false;
  } else if (name.length > 50){
  	alert("Name must be 50 or below characters");
    return false;
  }
  
  if(username == ""){
	alert("Username must be filled out");
    return false;
  } else if(username.length<5 || username.length>12){
	alert("Username must be 5 to 12 character only");
    return false;
  }
  
  if(password == ""){
	alert("Password must be filled out");
    return false;
  } else if(password.length<5 || password.length>12){
	alert("Password must be 5 to 12 character only");
    return false;
  }
	
  if(address == ""){
	alert("Address must be filled out");
    return false;
  }
  
  if(email == ""){
	alert("Email must be filled out");
    return false;
  }
  
  if(age == ""){
	alert("Age must be filled out");
    return false;
  }
  
  if(telephone == ""){
	alert("Telephone must be filled out");
    return false;
  }
  


}
</script>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Computer Club</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.7.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Computer Club</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="registeration.html">Register</a></li>
          <li><a class="nav-link scrollto active" href="viewStudent.php">All Member Info</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Join us and explore the world of computers</h1>
          <h2>Tagline: Computing Made Easy.</h2>
          <div><a href="#about" class="btn-get-started scrollto">Get To Know Us</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  











    <!-- ======= Contact Section ======= -->
    
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Join Now!</h2>
          <p>Your one way ahead. Fill up the form and you can become part of us.</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Cheras, Kuala Lumpur</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>computerclub@cheras.com</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=taman%20cheras%20utama&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">



    <form action="editStudent2.php" method="post" role="form"  onsubmit="return validateForm()"name="myForm">
  
    

      <div class="form-group mt-3">
      <input type="hidden" name="ic" class="form-control" id="ic" value="<?php echo $ic; ?>"> 
    </div>



    <div class="form-group mt-3">
      <input type="text" name="name" class="form-control" id="name" value="<?php echo $name; ?>"> 
    </div>


    <div class="form-group mt-3">
      <input type="text" name="username" class="form-control" id="username" value="<?php echo $username; ?>">
    </div>


    <div class="form-group mt-3">
      <input type="password" name="password" class="form-control" id="password" value="<?php echo $password; ?>">
    </div>


    <div class="form-group mt-3">
      <textarea class="form-control" name="address" rows="5" id="adress"><?php echo $adress; ?></textarea>
    </div>


    <div class="form-group mt-3">
      <p>Gender</p>
        <div class="radio">
          <label><input type="radio" name="gender" value="male" required>Male</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="gender" value="female" required>Female</label>
        </div>
    </div>


    <div class="form-group mt-3">
      <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>">
    </div>


    <div class="form-group mt-3">
              <div class="select">
                <select id="class" name="class">
                    <option value="M3CS2306A">M3CS2306A</option>
                    <option value="M3CS2306B">M3CS2306B</option>
              </div>
          </div>

<br>
<br>
    <div class="form-group mt-3">
      <input type="number" name="age" class="form-control" id="age" value="<?php echo $age; ?>">
    </div>


    <div class="form-group mt-3">
      <input type="number" name="telephone" class="form-control" id="telephone" value="<?php echo $telephone; ?>">
    </div>
    <input type="hidden" name="ic" value="<?php echo $ic ?>" />
    <br>
    
    <div class="text-center"><button type="reset" class="btn btn-dark">Reset</button></div>
    <br>
    <div class="text-center"><button class="btn btn-dark" onClick="return confirm('Confirmation to save record?')" name = "save"><b>Save</b>
    </div>
    </div>
    
    
    </form>

  </div>
  </section><!-- End Contact Section -->


   








    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Previous Activites</h2>
          <p>We are an active club, each week we will have an amazing activites to gain more knowledge on computer as well as tighten the bond between us. What are you waiting for? Join us now as an amazing adventure is waiting for you!</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Computer Activites</li>
              <li data-filter=".filter-card">Team Building</li>
              <li data-filter=".filter-web">Games</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/computer1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Computer activites 1</h4>
                <p>Computer</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/computer2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/games1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Games activities 1</h4>
                <p>Gaming </p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/computer2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Computer activites 2</h4>
                <p>Computer</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/team1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Team Building 1</h4>
                <p>Team Building</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/games2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gaming 2</h4>
                <p>Games</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/computer3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Computer activities 3</h4>
                <p>Computer</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/team2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Team Building 2</h4>
                <p>Team Building</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/team3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Team Building 3</h4>
                <p>Team Building</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/games3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Games activities 3</h4>
                <p>Games</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Techie</h3>
            <p>
              Cheras<br>
              Kuala Lumpur<br>
              Malaysia<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> contact@computer.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Get latest information and offer of our club.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Techie</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>




</html>











