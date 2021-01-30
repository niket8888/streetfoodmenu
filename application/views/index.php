<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
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
 
<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#event">Event</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Order For An Event</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <?php // echo "<pre>";print_r($title123);?>
            <h1 class="logo-name"><?php echo $title123[0]->title1;?></h1>
            <h2><?php echo $title123[0]->title2;?></h2>
            <p><?php echo $title123[0]->title3;?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row"> 
        <div class="col-md-12 text-center marb-35">
          <!-- <h1 class="header-h">Delicious Journey</h1> -->
          <h1 class="header-h"><?php echo $how_started[0]->how_started1;?></h1>
          <p class="header-p"><?php echo $how_started[0]->how_started2_mother ;?>.</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading"><?php echo $how_started[0]->how_started1_date ;?></h2>
              <p><?php echo $how_started[0]->how_started1_name ;?>. 
                <br> <?php echo $how_started[0]->how_started1_resn ;?> 
                <br> <?php echo $how_started[0]->how_started1_efforts ;?> </p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i><?php echo $how_started[0]->how_started1A ;?></li>
                  <li><i class="fa fa-check"></i><?php echo $how_started[0]->how_started1B ;?></li>
                  <li><i class="fa fa-check"></i><?php echo $how_started[0]->how_started1C ;?></li>
                  <li><i class="fa fa-check"></i><?php echo $how_started[0]->how_started1D ;?></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="<?php echo base_url('hoteladmin123/');?><?php echo $how_started[0]->how_started_img ;?>" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h"><?php echo $menu_special[0]->menu_special ;?></h1>
            <!-- <p class="header-p">Decorations 100% complete here</p> -->
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="<?php echo base_url('hoteladmin123/');?><?php echo $menu_special[0]->menu_special_img ;?>">
                <!-- <img src="img/res02.pg" class="img-responsive"> -->
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2><?php echo $menu_special[0]->menu_special_name ;?></h2>
                  <p><?php echo $menu_special[0]->menu_special_description1 ;?>. 
                    <br><?php echo $menu_special[0]->menu_special_description2 ;?>
                    <br><?php echo $menu_special[0]->menu_special_description3 ;?>
                  </p>
                  <address>
                              <strong>Single Price : </strong>
                              <?php echo $menu_special[0]->menu_price_single;?> Rs / Plate
                              <br>
                              <strong>Couple Price : </strong>
                              <?php echo $menu_special[0]->menu_price_couple ;?> Rs / Plate
                            </address>
                  <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">
          	<br><?php echo $menu_list[0]->menu_list1 ;?>  
            <br><?php echo $menu_list[0]->menu_list2 ;?>  
            <br><?php echo $menu_list[0]->menu_list3 ;?> 
          </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
<?php foreach ($category as $catkey) {;?>
            <li><a class="filter" data-filter=".<?php echo $catkey->category_name ;?>"><?php echo $catkey->category_name ;?></a></li>
<?php } ;?>
          </ul>
        </div>

        <div id="menu-wrapper">

<!-- ================ -->
<?php foreach ($category as $catkey) {;?>
  <?php $item1 = $this->am->select_where('item', 'category_id', $catkey->category_id) ;?>
  <?php if (!empty($item1)) {;?>
<?php foreach ($item1 as $ikey1) {;?>

          <div class="<?php echo $catkey->category_name;?> menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="<?php echo base_url('blog/item_detail/');?><?php echo $ikey1->item_id;?>" data-meal-img="assets/img/restaurant/rib.jpg"><?php echo $ikey1->item_name ;?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php echo $ikey1->item_price ;?>/- Rs </span>
            </span>
          </div>

<?php } } };?>

<!-- ------------------- -->
          <!-- <div class="sweet menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php ;?>Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php ;?>$20.99</span>
            </span> -->
            <!-- <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span> -->
          <!-- </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php ;?>Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php ;?>$20.99</span>
            </span> -->
            <!-- <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span> -->
          <!-- </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php ;?>Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php ;?>$20.99</span>
            </span> -->
            <!-- <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span> -->
          <!-- </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg"><?php ;?>Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php ;?>$20.99</span>
            </span> -->
            <!-- <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span> -->
          <!-- </div> -->


        </div>

      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
     <h1 class="header-h">Please Tell Us How Can We Improve <br> <h3></h3></h1>
          <p class="header-p"></p>
        </div>
      </div>

      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p"><?php echo $address[0]->phone;?> - <span class="contacts-sp">whats app</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p">
                <?php echo $address[0]->opening1; ?> </p>
              <p class="light-blue regular alt-p">
                <?php echo $address[0]->opening2;?> 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">

      <!-- ++++++++++++++++++++++  -->
    <?php echo form_open_multipart('blog/msg'); ?>
          <!-- <form action="" method="post" role="form" class="contactForm"> -->
            <div id="sendmessage">Your Msg has been sent. Thank you!</div>
            <div id="errormessage"></div>
            
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" value="<?php ;?>" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="mobile" id="phone" value="<?php ;?>" placeholder="Mobile No" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="msg" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?php ;?></textarea>
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">SEND</button>
              </div>
            </div>
          </form>
      <!--  ++++++++++++++++++++++++++++++++  -->
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Address</h4>
            <address><?php echo $address[0]->address1;?><br><?php echo $address[0]->address2;?></address>
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
