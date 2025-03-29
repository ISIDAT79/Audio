<?php
if(isset($_SESSION['customer']))
{
   $email=$_SESSION['customer'];
   $selstudent="select * from customer_reg where emailid='$email'";
   $resstudent=mysqli_query($conn,$selstudent);
   $row1=mysqli_fetch_array($resstudent);
   $cid =$row1['cid'];
   $fullname =$row1['fullname'];
   $address =$row1['address'];
   $city =$row1['city'];
   $mobileno =$row1['mobileno'];
   $gender =$row1['gender'];
    $dob =$row1['dob'];
	 $emailid =$row1['emailid'];
	  $status =$row1['status'];
	   $dateofreg =$row1['dateofreg'];
   
  }
  else
  {
  header("location:login.php");
  }
 ?> 