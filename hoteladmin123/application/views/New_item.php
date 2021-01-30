
<body>
  <?php if (isset($exits)) {;?>
  <script> alert('Category Already Exist'); </script>
  <?php } ;?>

  <?php if (isset($added)) {;?>
  <script> alert('Category Added Successfuly'); </script>
  <?php } ;?>

  <?php if (isset($item_added)) {;?>
  <script> alert('Item Added Successfuly'); </script>
  <?php } ;?>
  
  <?php if (isset($item_exist)) {;?>
  <script> alert('Item Exist Already'); </script>
  <?php } ;?>

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
            <a href="#contact">Book a table</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">

<?php echo form_open_multipart('Item/Add_category'); ?>
<input class="col-md-12" type="text" name="category_name" placeholder="Add New Category if Required">
 <button type="submit">Save Category</button>
</form>
 <hr>
<!-- ============== -->
<?php echo form_open_multipart('Item/insert_item'); ?>
       <label for="cars"><h3 style="color: white"> Choose a caegory: </h3></label>

  <option style="color: yellow" value="volvo">Select any one Category</option>
<select name="category_id" id="cars" required>
  <?php foreach ($category as $ckey) { ;?>
  <option value="<?php echo $ckey->category_id;?>"><?php echo $ckey->category_name;?></option>
  <?php } ;?>
</select>


<hr> <hr>
<input class="col-md-12" type="text" name="item_name" placeholder="Item Name" required> <br>
<input class="col-md-12" type="text" name="item_price" placeholder="Item Price ex: 100" required> <br>
<textarea class="col-md-12" name="item_description" placeholder="item_description" required></textarea> <br>
<input type="file" name="item_image" required>
<!-- ========================== -->
 <button type="submit">Save Item</button>
</form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->

  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Delicious</h4>
            <address><?php ;?>324 Ellte Road<br><?php ;?>Delhi, DL 110013</address>
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
