<?php

  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");
  $data = mysql_query("select * from animal");
  if (!$link) {
    die('error'.mysql_error());
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Your Searching Result!</title>
  <meta name="description" content="Kite Coming Soon HTML Template by Jewel Theme" >
  <meta name="author" content="Jewel Theme">

  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <!-- Bootstrap  -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- icon fonts font Awesome -->
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Custom Styles -->
  <link href="../assets/css/style.css" rel="stylesheet">


</head>
<body>

    <!-- list -->
    <section id="contact" class="section-style" data-background-image="../images/background/contact.jpg">
      <div class="pattern height-resize">
        <div class="container">
          <h3 class="section-name">
            <span>
              Your result
            </span>
          </h3><!-- /.section-name -->
          <h2 class="section-title">
            Here it is! 
          </h2><!-- /.Section-title  -->
          <p class="section-description">
            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
          </p><!-- /.section-description -->

            <div>
              
            <table width="100%" style="border:2px #FFFFFF solid; padding:5px; font-family:monospace;" rules="all" cellpadding='5'>
            <tr>
            <td align="center">ID</td>
            <td align="center">Animal Name</td>
            <td align="center">Orders</td>
            <td align="center">Update</td>
            <td align="center">Delete</td>

            </tr>

            <?php
              if (!$data){
                echo'error';
              }
              else{
                  for($i=1;$i<=mysql_num_rows($data);$i++){
                    $rs=mysql_fetch_row($data);
            ?>

            <tr>
            <!-- whether rs[id] or rs[0] -->
              <td align="center"><?php echo $rs[0]?></td>
              <td align="center"><?php echo $rs[1]?></td>
              <td align="center"><?php echo $rs[2]?></td>
              <td align="center"><a href="update0.php?update_id=<? echo $rs[0]; ?>">Update</a></td>
              <td align="center"><a href="delete.php?id=<? echo $rs[0]; ?>">Delete</a></td>
            </tr>
            <?php
                  } 
              }
            ?>
            </table>
            </div><!-- /.contact-box-hide -->

          <div class="next-section">
            <a href="animal.php"><span></span></a>
          </div><!-- /.next-section -->

        </div><!-- /.container -->
      </div><!-- /.pattern -->


   





    <footer id="footer-section">
      <p class="copyright">
        &copy; <a href="http://jeweltheme.com/html/kite/">IM107</a> 2016-2017, All Rights Reserved. Designed by & Developed by <a href="">DB team8</a>
      </p>
    </footer>
    <!-- Footer Section End -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="../assets/js/jquery-2.1.0.min.js"></script>
    <!-- Modernizr js -->
    <script type="text/javascript" src="../assets/js/modernizr-2.8.0.min.js"></script>
    <!-- Plugins -->
    <script type="text/javascript" src="../assets/js/plugins.js"></script>
    <!-- Custom JavaScript Functions -->
    <script type="text/javascript" src="../assets/js/functions.js"></script>
    <!-- Custom JavaScript Functions -->
    <script type="text/javascript" src="../assets/js/jquery.ajaxchimp.min.js"></script>

</body>
</html>
