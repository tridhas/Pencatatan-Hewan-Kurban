<!DOCTYPE html>
<html>
<head>
 <title>Login Admin</title>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="keywords" content="">
   <meta name="description" content="">
 <!-- stylesheets css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/nivo-lightbox.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/nivo_themes/default/default.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/hover-min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslider.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<section id="contact" class="parallax-section">
  <div class="overlay"></div>
 <div class="container">
  <div class="row">
   <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
            <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                <h2>Login Admin</h2>
                <h4>- Silakan Login Terlebih Dahulu -</h4>
            </div>
    <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
    
     <form action="<?php echo base_url(). 'login/aksilogin'; ?>" method="post">
      <input name="username" type="text" class="form-control" placeholder="username" required>
      <input name="password" type="password" class="form-control" placeholder="password" required>
      <input type="submit" class="form-control submit" value="login">
     </form>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    </div>
   </div>
   
  </div>
 </div>
</section>
<!-- Java Script -->
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.sticky.js"></script>
<script src="<?php echo base_url()?>assets/jquery.backstretch.min.js"></script>
<script src="<?php echo base_url()?>assets/js/isotope.js"></script>
<script src="<?php echo base_url()?>assets/js/imagesloaded.min.js"></script>
<script src="<?php echo base_url()?>assets/js/nivo-lightbox.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.parallax.js"></script>
<script src="<?php echo base_url()?>assets/js/smoothscroll.js"></script>
<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>
</html>