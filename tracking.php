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
 <style>
ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}
</style>
</head>


  
    <!-- end header section -->
    <!-- slider section -->
<body>
  <center>
  <div class="hero_area">
    <header class="header_section">
      <?php
      include("customermenu.php");
      ?>
      </header>
      <center><h1>Product Tracking - <?php echo $_REQUEST['t'];?></h1></center>
      <?php
      $t = $_REQUEST['t'];
      $sor="select * from c_cart where cc_username='$email' AND (cc_status='ordered' OR cc_status='processed' OR cc_status='dispatched' OR cc_status='delivered' OR cc_status='cancel' OR cc_status='returned') AND cc_id='$t'";
     $ror=mysqli_query($conn,$sor);
     if(mysqli_num_rows($ror))
     {
      while($wor=mysqli_fetch_assoc($ror))
      {
     ?>
     <ol class="progtrckr" data-progtrckr-steps="5">
      <?php
      if ($wor['cc_status'] == 'processed')
      {
        ?>
        <li class="progtrckr-done">ordered</li>
        <li class="progtrckr-done">processed</li>
        <li class="progtrckr-todo">dispatched</li>
        <li class="progtrckr-todo">delivered</li>
        <?php
        }
        elseif ($wor['cc_status'] == 'dispatched')
        {
          ?>
          <li class="progtrckr-done">ordered</li>
          <li class="progtrckr-done">processed</li>
          <li class="progtrckr-done">dispatched</li>
        <li class="progtrckr-todo">delivered</li>
        <?php
        }
        elseif ($wor['cc_status'] == 'delivered')
        {
          ?>
          <li class="progtrckr-done">ordered</li>
          <li class="progtrckr-done">processed</li>
          <li class="progtrckr-done">dispatched</li>
        <li class="progtrckr-done">delivered</li>
          <?php
        }
          elseif ($wor['cc_status'] == 'cancel')
          { 
          ?>
          <li class="progtrckr-done">ordered</li>
          <li class="progtrckr-done">cancel</li>
          <?php
          }
          elseif ($wor['cc_status'] == 'returned')
          {
            ?>
            <li class="progtrckr-done">ordered</li>
            <li class="progtrckr-done">returned</li>
            <?php
          }
          else
          {
            ?>
             <li class="progtrckr-done">ordered</li>
          <li class="progtrckr-todo">processed</li>
          <li class="progtrckr-todo">dispatched</li>
        <li class="progtrckr-todo">delivered</li>
        <?php
          }
          ?>
          </ol>
          <?php
      }
    }
    ?>

  </div>
  </center>
</body>
    

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
<br>
  
 
<?php
include("footer.php")
?>
  

</body>
</html>