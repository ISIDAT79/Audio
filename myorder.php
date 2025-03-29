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
          
          <div class="col-md-12">
            <div class="detail-box">
              <div class="heading_container">
                <h2 align="center">
                My Order
                </h2>
              </div>
			 
              <table class="table table-bordered">
			 <tr style="color:white">
			    <th>Id</th>
				<th>Product Code</th>
				<th>Customer Name</th>
				<th>Address</th>
				<th>Contact No</th>
				<th>Alternative Contact No</th>
				<th>Pincode</th>
				<th>Order Date</th>
				<th>Payment Type</th>
				
				</tr>
				 <?php
		$select="select * from c_purchase join pincode on pincodeid=c_purchase.cp_pincode";
		$res=mysqli_query($conn,$select);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<tr style="color:white">
		<td><?php echo $row['cp_id']; ?></td>
		<td><?php echo $row['cp_code']; ?> <a href="cust_viewproduct.php?product=<?php echo $row['cp_code']; ?>" class="btn btn-primary"> View Product</a></td>
		<td><?php echo $row['cp_name']; ?></td>
		<td><?php echo $row['cp_address']; ?></td>
		<td><?php echo $row['cp_contact']; ?></td>
		<td><?php echo $row['cp_alternative_contact']; ?></td>
		<td><?php echo $row['pincodeno']; ?></td>
		<td><?php echo $row['cp_date']; ?></td>
		<td><?php echo $row['cp_paymenttype']; ?></td>
		
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