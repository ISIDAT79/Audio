<?php
include("connection.php");
include("customersession.php");
$image=$_REQUEST['image'];
$pname=$_REQUEST['pname'];
$pcolor=$_REQUEST['pcolor'];
$price=$_REQUEST['total'];
$description=$_REQUEST['description'];
$qty=$_REQUEST['qty'];
$pe_code=$_REQUEST['pe_code'];
if(isset($_REQUEST['btn_add_submit']))
{
$c=1;
$ss="select * from c_cart";
$rr=mysqli_query($conn,$ss);
while($ww=mysqli_fetch_array($rr))
{
$c=$ww['cc_id']+1;
}
$code="C".$c;
$pe_code=$_REQUEST['pe_code'];
$psp_id=$_REQUEST['product'];
$price=$_REQUEST['total'];
$qty=$_REQUEST['qty'];
$status='cart';
$sct="select * from c_cart where psp_id='$psp_id' and cc_status='$status' and cc_username='$email'";
$rct=mysqli_query($conn,$sct);
if(mysqli_num_rows($rct))
{
header("location:add_to_cart.php");
}
else
{
$insert="insert into c_cart values(null,'$code','','$email','$psp_id','$qty','$price','$status','','','','','','')";
mysqli_query($conn,$insert);
header("location:add_to_cart.php");
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

  
<form method="post">
  <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <img src="Adminpanel/pages/forms/product/<?php echo $image;?>" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                 View Product Detail
                </h2>
              </div>
              <table border="0" cellspacing="0" cellpadding="0">
               <!-- <tr>
                  <td width="601" colspan="2" valign="top"><p align="center"><strong>Customer    View Profile</strong></p></td>
                </tr>-->
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Product Name</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $pname; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Color</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $pcolor; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Price</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $price; ?> Rs.</p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Description</strong></p></td>
                  <td width="301" valign="top"><p><?php echo  $description; ?></p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Processing Time</strong></p></td>
                  <td width="301" valign="top"><p>Item Will be Shipped within 3-4 Working Days.<br>GST Included.</p></td>
                </tr>
                <tr>
                  <td width="301" valign="top"><p align="center"><strong>Return Policy</strong></p></td>
                  <td width="301" valign="top"><p>10 Days Return</p></td>
                </tr>
               
                
              </table>
			  <center>
              <p><label style="color:#00FFCC">Quantity :</label>
<input type="hidden" name="pe_code" value="<?php echo $pe_code; ?>">
			  <input type="number" name="qty" min="1" max="<?php echo $qty; ?>" value="1"> <input type="submit" name="btn_add_submit" value="Add To Cart" class="btn btn-danger"> <input type="submit" name="btn_wish_submit" value="Add To Wishlist" class="btn btn-success"></p>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</form>

  <?php
  
  include("footer.php");
  ?>
</body>

</html>