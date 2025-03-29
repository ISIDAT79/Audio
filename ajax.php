<?php
	include("connection.php");
	
	$id = $_REQUEST['field'];
	$value = $_REQUEST['query'];
	
	$update="update c_cart set cc_qty='$value' where cc_id='$id'";
	mysqli_query($conn,$update);
	$scart="select * from c_cart where cc_id='$id'";
	$rcart=mysqli_query($conn,$scart);
	$tot=0;
	$wart=mysqli_fetch_array($rcart);
	$qty=$wart['cc_qty'];
	$price=$wart['cc_price'];
	$tot=$price* $qty;
echo number_format($tot,2);
?>