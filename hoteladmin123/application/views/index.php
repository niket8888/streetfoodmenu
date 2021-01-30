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
  
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header"> 
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#menu-list">Simple Menu</a>
            <a href="#menu-list">Image Menu</a>
            <a href="#contact">Contact Us</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      
<?php echo form_open_multipart('home/title123'); ?>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <?php //echo "<pre>";print_r($_POST);?>
            <h1 class="logo-name"><input type="text" class="col-md-12" name="title1" value="<?php // echo $title123->title1 ?>" placeholder="Street Cor"></h1>
            <h2> <input style="color: black" class="col-md-12" type="text" name="title2" value="<?php ?>" placeholder="Food To fit your lifestyle & health."></h2>
            <p> <input style="color: black" class="col-md-12" type="text" name="title3" value="<?php ?>" placeholder="Specialized in Indian Street Food!!"></p>
          </div>
        </div>
      </div>
<button type="submit">Save</button>
<hr>

<button type="submit" style="color: red"> <a href="<?php echo base_url('sign_out');?>">Sign Out</a> </button>

</form>


    </div> 
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
<?php echo form_open_multipart('home/how_started'); ?>
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h"><input class="col-md-12" type="text" name="how_started1" placeholder="How Street Corner Started"></h1>
          <p class="header-p"><input class="col-md-12" type="text" name="how_started2_mother" placeholder="Mother gift cooking knowlege, She is the best in cooking thats why I can cook well. Its her blessings.">
            <!-- <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p> -->
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading"><input class="col-md-12" type="text" name="how_started1_date" placeholder="Street Corner 8th Dec 2020"></h2>
              <p><input class="col-md-6" type="text" name="how_started1_name" placeholder="Hi, I am Niket Khapekar."> 
                <br> <input class="col-md-12" type="text" name="how_started1_resn" placeholder="This Journey Started beacause of three Reason 1)Money Need 2)Cooking Intress 3)Self Business."> 
                <br> <input class="col-md-12" type="text" name="how_started1_efforts" placeholder="I am Trying my best every day I hope you love what i can cook delisious deshese for you."> </p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i><input class="col-md-12" type="text" name="how_started1A" placeholder="Quality 1"> </li>
                  <li><i class="fa fa-check"></i><input class="col-md-12" type="text" name="how_started1B" placeholder="Quality 2"> </li>
                  <li><i class="fa fa-check"></i><input class="col-md-12" type="text" name="how_started1C" placeholder="Quality 3"> </li>
                  <li><i class="fa fa-check"></i><input class="col-md-12" type="text" name="how_started1D" placeholder="Quality 4"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="<?php echo $how_started[0]->how_started_img;?>" alt="" class="img-responsive">
          </div> <br>
        </div>
        <div class="col-md-1"></div>
      </div>
    <button type="submit">Save</button>
</form>
<hr>
<?php echo form_open_multipart('home/how_started_img'); ?>
          <input type="file" name="your_story_img">
          <input type="hidden" name="how_started_img_remove" value="<?php echo $how_started[0]->how_started_img;?>">
    <button type="submit" style="color: green">Save Image</button>
</form>

    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
<?php echo form_open_multipart('home/menu_special'); ?>
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h"><input type="text" name="menu_special" placeholder="Our Special/Signature/ Food"></h1>
            <!-- <p class="header-p">Total veg/non </p> -->
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="<?php echo $menu_special[0]->menu_special_img ;?>" class="img-responsive">
                <!-- <img src="<?php// echo base_url('assets/img/res02.jpg')?>" class="img-responsive"> -->
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2><input style="color: black" class="col-md-12" type="text" name="menu_special_name" placeholder="Soya Bean Rise"></h2>
                  <p> <input style="color: black" class="col-md-12" type="text" name="menu_special_description1" placeholder="Its A perfect Choise for Evening night."> <br>
                  <input style="color: black" class="col-md-12"type="text" name="menu_special_description2" placeholder="Its Fress, Hot And Healthy.">  <br> 
                <input style="color: black" class="col-md-12" type="text" name="menu_special_description3" placeholder="Perfectly cooked Soyabeans Melts in your Mouth."></p>
                  <address>
                              <strong>Single Price : </strong>
                              <input type="text" name="menu_price_single" placeholder="100 ">Rs / Plate
                              <br>
                              <strong>Couple Price : </strong>
                              <input type="text" name="menu_price_couple" placeholder="70 ">Rs / Plate
                            </address>
                  <a class="btn btn-imfo btn-read-more" href="#contact">Ask Now</a><hr>
<button type="submit">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
</form>

<?php echo form_open_multipart('home/menu_special_image'); ?>
    <input type="file" name="menu_special_image" placeholder="select an image">
    <input type="hidden" name="menu_special_image_remove" value="<?php echo $menu_special[0]->menu_special_img ;?>">
    <button type="submit" style="color: green">Save Image</button>
</form>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
<?php echo form_open_multipart('home/menu_list'); ?>
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">
            <br> <input class="col-md-12" type="text" name="menu_list1" placeholder="All the raw material are used for cooking including rise, oil and vegiees are properlly washed and clean.">

            <br> <input class="col-md-12" type="text" name="menu_list2" placeholder="Veg & Non-veg Both veriety we do serve. And Make Sure to use seperate Pots & Spoons."> 
            <br> <input class="col-md-12" type="text" name="menu_list3" placeholder="We use best fresh Soyabean oil & take care of Heigean.">
          </p> 
        </div>
      <a href="<?php echo base_url('item');?>">Add Item</a>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
  <!-- Foreach loop -->
  <?php foreach ($category as $ckey) {;?>

            <li><a class="filter" data-filter=".<?php echo $ckey->category_name ;?>"><?php echo $ckey->category_name ;?></a></li>
  <?php } ;?>
<!-- End foreach loop -->
          </ul>
        </div>

        <div id="menu-wrapper">

<!-- foreach loop for class name 
<div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="<?php echo base_url('assets/img/restaurant/rib.jpg')?>">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$20.99</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div> -->
<?php foreach ($category as $ckey) { ;?> 
  <?php foreach ($item as $ikey) { ;?>
  <?php if ($ckey->category_id == $ikey->category_id ) {;?>
  
          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="<?php echo base_url('assets/img/restaurant/rib.jpg')?>"><?php echo $ikey->item_name;?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php echo $ikey->item_price;?>/. 
                <button style="color: red">
                  <a href="<?php echo base_url('item/delete/');?><?php echo $ikey->item_id;?>?itmimg=<?php echo $ikey->item_image;?>"> [ <?php echo $ckey->category_name;?> ] Delete item?</button> </a>
<!--                   <a href="<?php echo base_url('item/delete/');?><?php echo $ikey->item_id."/";?><?php echo $ikey->item_image;?>"> [ <?php echo $ckey->category_name;?> ] Delete item?</button> </a>  -->
                </span>
            </span>
            <!-- <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span> -->
          </div>
 <?php  } ?>
  
<?php }} ;?>



<!-- 
          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="<?php echo base_url('assets/img/restaurant/rib.jpg')?>">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">30/. <button style="color: red">Delete item?</button></span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="<?php echo base_url('assets/img/restaurant/rib.jpg')?>">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">30/. <button style="color: red">Delete item?</button></span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
        <div class="sweet menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="<?php echo base_url('assets/img/restaurant/rib.jpg')?>">Food Item Name</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">30/. <button style="color: red">Delete item?</button></span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
 -->

        </div>

      </div>
    </div>
    <button type="submit">Save</button>
  </form>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
<?php echo form_open_multipart('home/Address'); ?>
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Please Tell Us How Can We Improve <br> <h3>Address</h3></h1>
          <p class="header-p">
            <input class="col-md-12" type="text" name="address1" placeholder="Address line one">
            <br>
            <input class="col-md-12" type="text" name="address2" placeholder="Address line two">
           </p>
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
              <p class="light-blue regular alt-p"><input type="text" name="phone" placeholder="+91 8956449091">  - <span class="contacts-sp">Whats app</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> <input type="text" name="opening1" placeholder="Monday to Friday 09.00 - 24:00"> </p>
              <p class="light-blue regular alt-p">
                <input type="text" name="opening2" placeholder="Friday and Sunday 08:00 - 03.00">
              </p>
            </div>
          </div>
    <button type="submit">Save</button>
</form>
        </div>

        <div class="col-md-8 col-sm-8">
<?php// echo form_open_multipart('home/Contact'); ?>
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>

            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Mobile No." data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
