<?php
include("connection.php");
if(isset($_REQUEST['btn_submit']))
{
$fullname=$_REQUEST['fullname'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$gender=$_REQUEST['gender'];
$mobileno=$_REQUEST['mobileno'];
$dob=$_REQUEST['dob'];
$emailid=$_REQUEST['emailid'];
$password=$_REQUEST['password'];
$date=date('Y-m-d');
$insert="insert into customer_reg values(null,'$fullname','$address','$city','$gender','$mobileno','$dob','$emailid','$password','Active','$date')";
mysqli_query($conn,$insert);
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/q1.jpg" type="image/x-icon">

  <title>
    Beardo
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index1.php">
          <span>
           Beardo
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.php">
                Testimonial
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="" align="center">
          Registartion
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
       
        <div class="col-md-6 col-lg-12 px-0">
         <form  method="post">

  <div class="imgcontainer">
  </div>

  <div class="container">
    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Name" name="fullname" required pattern="[A-Za-z\s]{3,50}" title="Full name should contain only letters and spaces (3-50 characters).">

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required pattern=".{5,100}" title="Address must be between 5 to 100 characters.">

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" required pattern="[A-Za-z\s]{2,50}" title="City should contain only letters and be 2-50 characters long.">

    <label for="gender"><b>Gender</b></label><br>
    <input type="radio" name="gender" value="Male" style="width:20px" required>Male &nbsp;&nbsp;&nbsp;
    <input type="radio" name="gender" value="Female" style="width:20px" required>Female
    <br><br>

    <label for="mobileno"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No" name="mobileno" required pattern="[0-9]{10}" maxlength="10" title="Mobile number must be exactly 10 digits.">

    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" name="dob" class="form-control" required max="2006-12-31" title="You must be at least 18 years old.">

    <label for="emailid"><b>Email ID</b></label>
    <input type="email" placeholder="Enter Email ID" name="emailid" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address.">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter 8-character Password" name="password" required pattern=".{8,8}" title="Password must be exactly 8 characters long.">

    <br><br>
    <input type="submit" name="btn_submit" value="Register" style="background-color:#FF6600; color:#FFFFFF">
</div>

   <!-- <label>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </label> -->
  </div>

 
</form>
		<a href="login.php" style="color:#FF0000">** Login</a>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Gb road 123 london Uk </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+01 12345678901</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> demo@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>