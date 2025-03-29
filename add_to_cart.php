<?php
include("connection.php");
include("customersession.php");
if(isset($_REQUEST['del']))
{
$del=$_REQUEST['del'];
$delete="delete from c_cart where cc_id='$del'";
mysqli_query($conn,$delete);
header("location:add_to_cart.php");
}
//checkout coding
if(isset($_REQUEST['btn_submit']))
{
$nm=$_REQUEST['txt_nm'];
$add=$_REQUEST['txt_add'];
$cno=$_REQUEST['txt_cno'];
$cnoa=$_REQUEST['txt_cnoa'];
$pin=$_REQUEST['txt_pin'];
$payment=$_REQUEST['txt_payment'];
$c=100000;
$ss="select * from c_purchase";
$rr=mysqli_query($conn,$ss);
while($ww=mysqli_fetch_array($rr))
{
$c=$ww['cp_code'] + 1;
}
$date=date('Y-m-d');
$insert="insert into c_purchase values(null,'$c','$email','$nm','$add','$cno','$cnoa','$pin','$date','ordered','$payment')";
mysqli_query($conn,$insert);

$update="update c_cart set cp_code='$c',cc_status='ordered' where cc_username='$email' and cc_status='cart'";
mysqli_query($conn,$update);
header("location:add_to_cart.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <?php
  include("headcss.php");
  ?>
  <script>
function validate(field, query) 
{
	var xmlhttp;
	if (window.XMLHttpRequest) 
	{ 
		// for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} 
	else 
	{ 
		// for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) 
		{
			document.getElementById(field).innerHTML = "Validating..";
		} 
		else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} 
		
	}
	xmlhttp.open("GET", "ajax.php?field=" + field + "&query=" + query, false);
	xmlhttp.send();
}
</script>
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

  <section class="shop_section layout_padding">
    <div class="container">
    
   <center><b class="btn btn-success">Add To cart</b></center>
   <br>
     <table border="1" class="table">
	 <tr>
	 <th>Image</th>
	 <th>Product Name</th>
	 <th>Sub Product Name</th>
	 <th> Name</th>
	 <th>Quantity</th>
	 <th>Price</th>
	 <th>Total Price</th>
	 <th>Action</th>
	 </tr>
	 <?php
	 $tot=0;
	  $scart="select * from c_cart join product_size_price on product_size_price.psp_id=c_cart.psp_id join product_entry on product_entry.pe_code=product_size_price.pe_code join subproduct on subproduct.spid=product_entry.p_subid join product on product.pid=subproduct.sproductid where cc_username='$email' and cc_status='cart'";
			  $rcart=mysqli_query($conn,$scart);
			while($row=mysqli_fetch_array($rcart))
			{
			$qty=$row['cc_qty'];
			$price=$row['cc_price'];
			$tot=$price * $qty;
			  ?>
			  <tr>
			  <td><img src="Adminpanel/pages/forms/product/<?php echo $row['product_image']; ?>" height="50px" width="50px"></td>
			  <td><?php echo $row['productname'];?></td>
			  <td><?php echo $row['subproductname'];?></td>
			  <td><?php echo $row['pname'];?> - <?php echo $row['pcolor'];?></td>
			  <td><input type="number" name="txt_qty" onKeyUp="validate('<?php echo $row['cc_id'];?>',this.value)" min="1" max="<?php echo $row['pro_pur_qty'];?>" value="<?php echo $row['cc_qty'];?>" ></td>
			  <td><?php echo $row['cc_price'];?> Rs</td>
			  <td id="<?php echo $row['cc_id']; ?>"><?php echo number_format($tot,2)?> Rs</td>
			    <td><a href="add_to_cart.php?del=<?php echo $row['cc_id'];?>" class="btn btn-danger" onClick="return confirm('Are u Sure Delete the Cart Item?')">X</a></td>
			  </tr>
			  <?php
			  }
			  ?>
			  <tr>
			  <td colspan="5"></td>
			  <td>Total</td>
			  <td>
			  <?php
			  $ct=0;
			  $qty1=0;
			  $price1=0;
			  $tot1=0;
			  $gt1=0;
			  $c="select * from c_cart where cc_username='$email' and cc_status='cart'";
			  $cc=mysqli_query($conn,$c);
			  while($row1=mysqli_fetch_array($cc))
			  {
			  $ct++;
			  $qty1=$row1['cc_qty'];
			  $price1=$row1['cc_price'];
			  $tot1=$price1 * $qty1;
			  $gt1=$gt1 + $tot1;
			  }
			  ?>
			  <?php echo $gt1;?>
			  </td>
			  </tr>
	 </table>
    </div>
	<center><h2>Customer Detail</h2></center>
<form method="post">
<div class="container">
<div class="form-group">Customer Name</div>
<input type="text" name="txt_nm" class="form-control" placeholder="Enter Customer name" pattern="[a-z A-z]{2,}" required><br>
<div class="form-group">Address</div>
<input type="text" name="txt_add" class="form-control" placeholder="Enter Customer Address" required><br>
<div class="form-group">Customer Contact No</div>
<input type="text" name="txt_cno" class="form-control" placeholder="Enter Customer No" pattern="[0-9]{10,10}" required><br>
<div class="form-group">Customer Alternative Contact No</div>
<input type="text" name="txt_cnoa" class="form-control" placeholder="Enter Customer Alternative No" pattern="[0-9]{10,10}" required><br>
<div class="form-group">Customer Pincode</div>
<select name="txt_pin" class="form-control" required>
<option value="" selected="selected">-- Select Pincode --</option>
				   <?php
				 $select="select * from pincode";
				 $res=mysqli_query($conn,$select);
				 while($row=mysqli_fetch_array($res))
				 {
				 ?>
<option value="<?php echo $row['pincodeid']; ?>"><?php echo $row['pincodeno']; ?></option>
     <?php
       }
      ?>

</select>
<br>
<div class="form-group">Customer Payment</div>
<select name="txt_payment" class="form-control" required>
<option value="" selected="selected">-- Select Payment --</option>
<option value="Gpay">Gpay</option>
<option value="QR Code">QR Code</option>
<option value="COD">COD(Cash On Delivery)</option>
</select>
<img src="images/qr.png" height="200px" width="200px"><br>
<center><input type="submit" name="btn_submit" value="Checkout" class="btn btn-danger"></center>
</div>
</form>
  </section>
  

  <?php
  
  include("footer.php");
  ?>
</body>

</html>