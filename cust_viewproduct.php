<?php
include("connection.php");
include("customersession.php");

if(isset($_REQUEST['can']))
{
$can=$_REQUEST['can'];
$update="update c_cart set cc_status='cancel' where cc_id='$can'";
mysqli_query($conn,$update);
header("location:myorder.php");
}
if(isset($_REQUEST['return']))
{
$return=$_REQUEST['return'];
$update="update c_cart set cc_status='return' where cc_id='$return'";
mysqli_query($conn,$update);
header("location:myorder.php");

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
          
          <div class="col-md-12">
            <div class="detail-box">
              <div class="heading_container">
                <h2 align="center">
                Customer Buy Product
                </h2>
				<br>
              </div>
			 
              <table class="table table-bordered" style="color:white">
			 <tr style="color:white">
			    <th>Id</th>
				 <th>Image</th>
	 <th>Product Name</th>
	 <th>Sub Product Name</th>
	 <th> Name</th>
	 <th>Quantity</th>
	 <th>Price</th>
	 <th>Total</th>
	  <th>Status</th>
	  <th>Tracking</th>
				
				</tr>
				 <?php
				 $product=$_REQUEST['product'];
		$select="select * from c_cart join product_size_price on product_size_price.psp_id=c_cart.psp_id join product_entry on product_entry.pe_code=product_size_price.pe_code join subproduct on subproduct.spid=product_entry.p_subid join product on product.pid=subproduct.sproductid where c_cart.cp_code='$product' ";
		$res=mysqli_query($conn,$select);
		while($row=mysqli_fetch_array($res))
		{
		$qty=$row['cc_qty'];
			$price=$row['cc_price'];
			$tot=$price * $qty;
		?>
		   
			<td><?php echo $row['cc_id'];?>
		<td><img src="Adminpanel/pages/forms/product/<?php echo $row['product_image']; ?>" height="50px" width="50px"></td>
			  <td><?php echo $row['productname'];?></td>
			  <td><?php echo $row['subproductname'];?></td>
			  <td><?php echo $row['pname'];?> - <?php echo $row['pcolor'];?></td>
			  <td><?php echo $row['cc_qty'];?></td>
			  <td><?php echo $row['cc_price'];?> Rs</td>
			  <td id="<?php echo $row['cc_id']; ?>"><?php echo number_format($tot,2)?> Rs</td>
			  <td>
			  <?php
			  if($row['cc_status']=='ordered')
			  {
			  ?>
	<a href="cust_viewproduct.php?can=<?php echo $row['cc_id'];?>" onClick="return confirm('Are u sure Your Product Will Be Cancel?')" class="btn btn-success"><?php echo $row['cc_status'];?></a>
	   <?php
	   }
	   else if($row['cc_status'] =='processed')
	   {
	   ?>
	   <b  class="btn btn-info"><?php echo $row['cc_status'];?></b>
	   <?php
	   }
	   else if($row['cc_status'] =='dispatched')
	   {
		?>
		 <b  class="btn btn-primary"><?php echo $row['cc_status'];?></b>
		 <?php
	   }
	   else if($row['cc_status'] =='delivered')
	   {
	   ?>
	   <b  class="btn btn-secondary"><?php echo $row['cc_status'];?></b>
	   <hr>
	   <a href="cust_viewproduct.php?return=<?php echo $row['cc_id'];?>" onClick="return confirm('Are u sure your product will Be Return?')"class="btn btn-danger">Return</a>
	   <?php
	   }
	   else if($row['cc_status'] =='cancel')
	   {
	   ?>
	   <b  class="btn btn-danger"><?php echo $row['cc_status'];?></b>
	    <?php
	   }
	   else if($row['cc_status'] =='return')
	   {
	   ?>
	   <b  class="btn btn-warning"><?php echo $row['cc_status'];?></b>
	   <?php
	   }
	   
	   ?>
			  </td>
			  <td><a href="tracking.php?t=<?php echo $row['cc_id']; ?>" class="btn btn-warning">Tracking</a><td>
			  </tr>
		<?php
		}
		?>
			 </table>
		
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