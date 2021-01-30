<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious Admin</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
 <style>
   #transferant { backface-visibility:  }
 </style>
<body>
   <?php if (isset($item_deleted)) {;?>
  <script> alert('Item Deleted Successfuly'); </script>
  <?php } ;?>

  <?php if (isset($imgupdate)) {;?>
  <script> alert('Image Updated Successfuly'); </script>
  <?php } ;?>
  

  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">

        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h"><?php echo $item_detail[0]->item_name ;?> </h1>
            <!-- <p class="header-p">Total veg/non </p> -->
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="<?php echo base_url('hoteladmin123/').$item_detail[0]->item_image ;?>" class="img-responsive">
                <!-- <img src="<?php// echo base_url('assets/img/res02.jpg')?>" class="img-responsive"> -->
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <p><?php echo $item_detail[0]->item_description ;?></p>
                  <p>  </p>
                  <address>
                              <strong>Price : </strong>
                              <?php echo $item_detail[0]->item_price ;?>Rs / Plate
                            </address>
                  <a class="btn btn-imfo btn-read-more" href="#contact">Ask Now</a><hr>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ event -->

  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <a href="<?php echo base_url();?>"> <h4 class="widget-title">Home</h4> </a>
            <address>Address </address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © Delicious Theme. All Rights Reserved
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                Developed by <a href="https://bootstrapmade.com/">Niket Khapekar</a>
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
  <script src="<?php echo base_url('assets/contactform/contactform.js')?>"></script>

</body>

</html>
