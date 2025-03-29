<?php
include("connection.php");
include("customersession.php");

?>
<!DOCTYPE html>
<html>

<head>
  <?php
  include("headcss.php");
  ?>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
     <?php
	 include("customermenu.php");
	 ?>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <br>

  

  <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <img src="images/gifts.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                 View Profile
                </h2>
              </div>
              <table border="1" cellspacing="0" cellpadding="0">
               <!-- <tr>
                  <td width="601" colspan="2" valign="top"><p align="center"><strong>Customer    View Profile</strong></p></td>
                </tr>-->
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Full Name</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $fullname; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Address</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $address; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>City</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $city; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Mobile    No</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $mobileno; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Gender</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $gender; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Date of Birth</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $dob; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Email id</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $emailid; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Status</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $status; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Date    of Registration</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $dateofreg; ?></p></td>
                </tr>
              </table>
			  <center>
              <p><a href="changepassword.php" class="btn btn-success">Change Password</a></p>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <?php
  
  include("footer.php");
  ?>
</body>

</html>