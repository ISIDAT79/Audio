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

  <section class="shop_section layout_padding">
    <div class="container">
    
      <div class="row">
        <?php
		$select="select * from product_entry join product_size_price on product_size_price.pe_code=product_entry.pe_code";
		$res=mysqli_query($conn,$select);
		while($row=mysqli_fetch_array($res))
		{
		?>
        
        
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="Adminpanel/pages/forms/product/<?php echo $row['product_image']; ?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
         <?php echo $row['pname']; ?>-<?php echo $row['pcolor']; ?>
                </h6>
                <h6>
               
                  <span>
                    <?php
					$total=0;
					$tgst=0;
					$gstpi=0;
					$cgst=$row['cgst'];
					$sgst=$row['sgst'];
					$tgst=$cgst+$sgst;
					$sprice=$row['pro_sale_qty'];
					$gstpi=$sprice * $tgst/100;
					echo $total=$sprice+$gstpi;
					?> Rs.
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  <a href="viewproduct.php?product=<?php echo $row['psp_id']; ?>&image=<?php echo $row['product_image']; ?>&pname=<?php echo $row['pname']; ?>&pcolor=<?php echo $row['pcolor']; ?>&total=<?php echo $total; ?>&description=<?php echo $row['description']; ?>&qty=<?php echo $row['pro_pur_qty']; ?>&pe_code=<?php echo $row['pe_code']; ?>">View</a>
                </span>
              </div>
            </a>
          </div>
        </div>
        <?php
		}
		?>
      </div>
     
    </div>
  </section>

  <!-- end shop section -->

  <!-- saving section -->

  
  <!-- end why section -->


  <!-- gift section -->

 
  <!-- end client section -->

  <!-- info section -->

  <?php
  
  include("footer.php");
  ?>
</body>

</html>