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
 
    <body class="login-page">
        <div class="login-box"> 
            <div class="logo">
                <a href="javascript:void(0);" style="position: center">My Admin</a> 
            </div>
            <div class="card">
                <div class="body">
                    <?= form_open('login/Resetpass'); //('controller/MEthod in controller')
                    ?>
                    <!--<form id="sign_in" action="<?php echo base_url(); ?>login/check_admin" method="POST"> -->
                        <div class="msg">Password Reset</div>
                        
                        <?php if(!empty($msg)){ echo "<p style='color:red;'><i>".$msg."</i></p>";} ?>
                        
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="user_name" placeholder="User Name" autofocus required> 
                            </div>
                        <?php echo "<i style='color:red'>".form_error('old_pass')."</i>"; ?>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="old_password" placeholder="Old Password" autofocus required>
                            </div>
                        <?php echo "<i style='color:red'>".form_error('old_pass')."</i>"; ?>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="new_password" placeholder="New Password" required>
                            </div>
                         <?php echo "<i style='color:red'>".form_error('new_password')."</i>"; ?>   
                        </div>
                        <div class="row">
                            <!-- <div class="col-xs-8 p-t-5"> -->
                             <!--   <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">-->
                                <!-- <label for="rememberme"></label> -->
                            <!-- </div> -->
                            <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">Reset Password</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Jquery Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
    </body>
</html>

