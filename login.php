<?php
include("connection.php");
if(isset($_REQUEST['btn_submit']))
{
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$select="select * from adminlogin where emailid='$email' and password='$password'";
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);

//customer login
$query="select * from customer_reg where emailid='$email' and password='$password'";
$result=mysqli_query($conn,$query);
$cusrow=mysqli_fetch_array($result);

if(mysqli_num_rows($res)>0)
{
$_SESSION['admin']=$email;
echo "<script>window.location='Adminpanel/pages/forms/product.php'</script>";
}
elseif(mysqli_num_rows($result)>0)
{
$_SESSION['customer']=$email;
echo "<script>window.location='customerhome.php'</script>";
}
else
{
echo '<script>alert("Invalid Email id & Password")</script>';
echo "<script>window.location='login.php'</script>";
}
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
  <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">

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
        <span style="color:#CC3300">
            <center><img src="images/q1.jpg" height="30%" width="30%" alt=""></center>
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
          Log In
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
             <img src="images/23.png" height="100%" width="100%">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form method="post">
           
            <div>
              <input type="email" name="email" placeholder="Enter Email Id" />
            </div>
            <div>
              <input type="password" name="password" placeholder="Enter password" />
            </div>
           
            <div class="d-flex ">
              <input type="submit" style="color:white; background-color:black" name="btn_submit"/>
            </div>
          </form>
		<button><a href="registration.php" style="color:cyan; font-style:bold;font-size:large"> New Customer Registration</a></button>
        </div>
      </div>
    </div> 
  </section>

  <!-- end contact section -->

  <!-- info section -->
<?php
include("footer.php");  
?>
 

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>