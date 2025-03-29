 <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index1.html">
          <span style="color:#CC3300">
              Beardo Perfume
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="customerhome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">
                Product
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">
                 Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myorder.php">
                My Order
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout <b style="color:red">(<?php echo $fullname; ?>)</b></a>
            </li>
          </ul>
          <div class="user_option">
            
            <a href="add_to_cart.php">
              <i class="fa fa-shopping-bag" aria-hidden="true">

			  <?php
			  $scart="select * from c_cart where cc_username='$email' and cc_status='cart'";
			  $rcart=mysqli_query($conn,$scart);
			  $abc=mysqli_num_rows($rcart);
			  ?>
			  (<?php echo $abc;?>)</i>
            </a>
            
          </div>
        </div>
      </nav>