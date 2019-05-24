<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Kurban</title>
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
                <h2>Edit Data Kurban!</h2>
                <h4>"Kejujuran Adalah Mata Uang Dunia"</h4>
            </div>
				<div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
					
					<?php foreach($daftar_hewan_kurban as $hewan){ ?>
					<form action="<?php echo base_url(). 'DataKurban/updatedata'; ?>" method="post">
						<input name="no" type="hidden" class="form-control" placeholder="no" value="<?php echo $hewan->no?>" required>
						<input name="pemilik" type="text" class="form-control" placeholder="Pemilik Hewan" value="<?php echo $hewan->pemilik ?>" required>
						<input name="jenis_hewan" type="text" class="form-control" placeholder="Jenis Hewan" value="<?php echo $hewan->jenis_hewan ?>" required>
            			<input name="quantity" type="text" class="form-control" placeholder="Quantity" value="<?php echo $hewan->quantity ?>" required>
            			<input name="kontak" type="text" class="form-control" placeholder="Kontak" value="<?php echo $hewan->kontak ?>" required>
						<textarea name="alamat" class="form-control" placeholder="Alamat" rows="5" required> <?php echo $hewan->alamat;?></textarea>
						<input type="submit" class="form-control submit" value="Simpan!">
					</form>
					<?php } ?>
					
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- Java Script -->
<script src="<?php echo base_url()?>assetsjs/jquery.js"></script>
<script src="<?php echo base_url()?>assetsjs/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>assetsjs/jquery.magnific-popup.min.js"></script>

<script src="<?php echo base_url()?>assetsjs/jquery.sticky.js"></script>
<script src="<?php echo base_url()?>assets/jquery.backstretch.min.js"></script>

<script src="<?php echo base_url()?>assetsjs/isotope.js"></script>
<script src="<?php echo base_url()?>assetsjs/imagesloaded.min.js"></script>
<script src="<?php echo base_url()?>assetsjs/nivo-lightbox.min.js"></script>

<script src="<?php echo base_url()?>assetsjs/jquery.flexslider-min.js"></script>

<script src="<?php echo base_url()?>assetsjs/jquery.parallax.js"></script>
<script src="<?php echo base_url()?>assetsjs/smoothscroll.js"></script>
<script src="<?php echo base_url()?>assetsjs/wow.min.js"></script>

<script src="<?php echo base_url()?>assetsjs/custom.js"></script>
</body>
</html>