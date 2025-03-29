<?php
include("connection.php");
include("customersession.php");
$msg="";
if(isset($_REQUEST['btn_submit']))
{
$oldpassword=$_REQUEST['old_password'];
$newpassword=$_REQUEST['password'];
$cpassword=$_REQUEST['cpassword'];

$changeselect="select * from customer_reg where password='$oldpassword' and emailid='$email'";
$cresult=mysqli_query($conn,$changeselect);

if(mysqli_num_rows($cresult)>0)
{
if($_REQUEST['password'] == $_REQUEST['cpassword'])
{
$q1="update customer_reg set password='$newpassword' where emailid='$email'";
mysqli_query($conn,$q1);
$msg="Successfully Change Password";
}
else
{
$msg="New and Confirm Password Are Not Match";
}
}
else
{
$msg="Old Password is Invalid";
}
}
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
                Change Password
                </h2>
              </div>
              <form method="post"><u style="color:white">
			  <?php
			  if($msg != '')
			  {
			  echo "**** ".$msg;
			  }
			  ?></u>
			  <div class="form-group">
			  <label>Old Password</label>
			  <input type="password" name="old_password" class="form-control" placeholder="Enter old Password" required>
			  </div>
			  
			   <div class="form-group">
			  <label>New Password</label>
			  <input type="password" name="password" class="form-control" placeholder="Enter New Password" required>
			  </div>
			  
			   <div class="form-group">
			  <label>Confirm Password</label>
			  <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password" required>
			  </div>
			  
			  <div class="form-group" align="center">
			  <input type="submit" name="btn_submit" class="btn btn-success">
			  </div>
			  </form>
			  
			  
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