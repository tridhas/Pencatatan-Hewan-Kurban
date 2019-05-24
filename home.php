<!DOCTYPE html>
<html lang="en">
<head>

	<title>Pencatatan Hewan Kurban</title>
<!--

Template 2083 Steak House

http://www.tooplate.com/view/2083-steak-house

-->
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

<!-- Preloader section -->
<!-- <div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div> -->


<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">
 
        <?php if ($this->session->userdata('status') == "login_user") {?>
          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">PENCATATAN HEWAN KURBAN</h1>
              <p class="wow fadeInUp" data-wow-delay="1.0s">Merupakan lembaga sosial yang bertugas untuk mencatat hewan kurban di wilayah Kota Bandung, dengan tujuan untuk pemerataan pembagian hewan kurban pada masyarakat yang berhak mendapatkan haknya sebagai penerima hewan kurban.</p>
              <a href="#feature" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Daftar Catatan Kurban</a>
          </div>
        <?php } else {?>
          <div class="col-md-offset-2 col-md-8 col-sm-12">
            <h1 class="wow fadeInUp" data-wow-delay="0.6">PENCATATAN HEWAN KURBAN</h1>
            <p class="wow fadeInUp" data-wow-delay="1.0s">Merupakan lembaga sosial yang bertugas untuk mencatat hewan kurban di wilayah Kota Bandung, dengan tujuan untuk pemerataan pembagian hewan kurban pada masyarakat yang berhak mendapatkan haknya sebagai penerima hewan kurban.</p>
        <?php } ?>
      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Berkurban Yuk!!</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php if($this->session->userdata('status') == "login_user")
          {?>
        <li><a href="#top" class="smoothScroll">Beranda</a></li>
        <li><a href="datakurban/tambah" class="smoothScroll">Catat Hewan!</a></li>
        <li><a href="#menu" class="smoothScroll">Artikel</a></li>
        <li><a href="#team" class="smoothScroll">Petugas</a></li>
        <li><a href="#gallery" class="smoothScroll">Jenis Kurban</a></li>
      
      <li class "dropdown"><a href="#" class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('username') ?></a>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" role="presentation" href="<?php echo base_url().'home/registrasi'; ?>">Tambah User</a>
          <a class="dropdown-item" role="presentation" href="<?php echo base_url().'login/logout'; ?>">Logout</a>
        </div>
      </li>
    <?php } else {?>
      <li><a href="#top" class="smoothScroll">Beranda</a></li>
      <li><a href="#menu" class="smoothScroll">Artikel</a></li>
      <li><a href="#team" class="smoothScroll">Petugas</a>></li>
      <li><a href="#gallery" class="smoothScroll">Jenis Kurban</a></li>

    <?php } ?>
      </ul>
    
    </div>

  </div>
</div>

<!-- Feature section -->
<section id="feature" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
            <h2>Daftar Catatan Kurban</h2>
          </div>
      </div>
      <!-- Bagian Tabel -->
      <div class="scrolltable">
      <table class="table1">
    <thead>
      <?php if($this->session->userdata('status') == "login_user")
              {?>
    <tr>
      <th>No</th>
      <th>Pemilik</th>
      <th>Jenis Hewan</th>
      <th>Qty</th>
      <th>Kontak</th>
      <th>Alamat</th>
      <th>Aksi</th>

      <?php } else {?>

      <th>No</th>
      <th>Pemilik</th>
      <th>Jenis Hewan</th>
      <th>Qty</th>
      <th>Kontak</th>
      <th>Alamat</th>
      <?php } ?>

    </tr>
    </thead>
    <?php $id=1; foreach($daftar_hewan_kurban as $hewan){
    ?>
    <tbody>
    <tr>
      <?php if($this->session->userdata('status') == "login_user")
          {?>

      <td><?php echo $id++ ?></td>
      <td><?php echo $hewan->pemilik ?></td>
      <td><?php echo $hewan->jenis_hewan ?></td>
      <td><?php echo $hewan->quantity ?></td>
      <td><?php echo $hewan->kontak ?></td>
      <td><?php echo $hewan->alamat ?></td>
      <td>
            <?php echo anchor('DataKurban/hapusdata/'.$hewan->no,'Hapus'); ?>
            <?php echo anchor('DataKurban/editdata/'.$hewan->no,'Edit'); ?>

      </td>
        <?php } else {?>
        <td><?php echo $id++ ?></td>
        <td><?php echo $hewan->pemilik ?></td>
        <td><?php echo $hewan->jenis_hewan ?></td>
        <td><?php echo $hewan->quantity ?></td>
        <td><?php echo $hewan->kontak ?></td>
        <td><?php echo $hewan->alamat ?></td>
      <?php } ?>
    </tr>
  </tbody>
  <?php } ?>
    
  </table>  </div>

    </div>
    <br>
    <a href="" class="btn btn-default" data-wow-delay="1.3s">Print</a>
  </div> 
</section>



<!-- About section -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>YUK BERKURBAN!</h2>
            <h4>Lembaga Sosial yang Berdiri Sejak 2019</h4>
          </div>
      </div>

      <div class="clearfix"></div>
      
      <div class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">
        <img src="<?php echo base_url()?>assets/images/sapi.png" class="img-responsive" alt="About">
        <h3>“Maka makanlah sebagiannya (daging kurban) dan berilah makan orang yang merasa cukup dengan apa yang ada padanya (yang tidak meminta-minta) dan orang yang meminta.” Q.S:Al Hajj:36</h3>
      </div>

      <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

        <!-- flexslider -->
        <div class="flexslider">
          <ul class="slides">

            <li>
              <img src="<?php echo base_url()?>assets/images/barengan.jpeg" class="img-responsive" alt="Flexslider">
            </li>
            
            <li>
              <img src="<?php echo base_url()?>assets/images/uang.png" class="img-responsive" alt="Flexslider">
            </li>
            
            <li>
              <img src="<?php echo base_url()?>assets/images/kriteria.jpg" class="img-responsive" alt="Flexslider">
            </li>

          </ul>
        </div>

         <p></p>
      </div>

       <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="0.9s">
        	<h2>Keutamaan Berkurban</h2>
         	<p></p>
         	<p></p>
         	
            <ul>
                <li>
                  Meneladani Nabi Ibrahim dan Ismail 
                </li>
                <li>
                  Napak tilas ibadah Qurban dari Ibrahim dan Ismail 
                </li>
                <li>
                  Belajar untuk ikhlas
                </li>
          <p>
            <a href=https://dalamislam.com/landasan-agama/al-quran/keutamaan-berkurban" class="smoothScroll">More...</a></li>
          </p>
         	</ul>
      </div>

		</div>
	</div>
</section>


<!-- Video section -->
<section id="video" class="parallax-section">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=1pdBI_MQtiQ"><i class="fa fa-play"></i></a>
              <h2 class="wow fadeInUp" data-wow-delay="0.5s">Tonton</h2>
              <p class="wow fadeInUp" data-wow-delay="0.8s">Tata cara pemotongan hewan kurban</p>
          </div>

      </div>
    </div>
</section>

<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Artikel Catatan Kurban</h2>
            <h4>Berbagi Ilmu adalah Kemuliaan</h4>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.6s">
          <div class="media-object pull-left">
            <img src="<?php echo base_url()?>assets/images/barengan.jpeg" class="img-responsive" alt="Food Menu">
            <!-- <span class="menu-price">$24</span> -->
          </div>
          <div class="media-body">
            <h3 class="media-heading">Jenis Hewan Kurban</h3>
            <a href="https://wahdah.or.id/kriteria-dan-jenis-hewan-qurban/" class="smoothScroll">Klik Disini</a></li>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="<?php echo base_url()?>assets/images/uang.png" class="img-responsive" alt="Food Menu">
            <!-- <span class="menu-price">$36</span> -->
          </div>
          <div class="media-body">
            <h3 class="media-heading">Harga Hewan Kurban</h3>
            <a href="https://www.finansialku.com/harga-hewan-kurban-idul-adha-2018/" class="smoothScroll">Klik Disini</a></li>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object pull-left">
            <img src="<?php echo base_url()?>assets/images/kriteria.jpg" class="img-responsive" alt="Food Menu">
            <!-- <span class="menu-price">$24</span> -->
          </div>
          <div class="media-body">
            <h3 class="media-heading">Kriteria Hewan Kurban</h3>
            
            <a href="https://konsultasisyariah.com/8166-kriteria-hewan-kurban.html" class="smoothScroll">Klik Disini</a></li>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="1s">
          <div class="media-object pull-left">
            <img src="<?php echo base_url()?>assets/images/hukum.jpg" class="img-responsive" alt="Food Menu">
            <!-- <span class="menu-price">$32</span> -->
          </div>
          <div class="media-body">
            <h3 class="media-heading">Hukum Berkurban</h3>
            <a href="https://www.globalqurban.com/id/news/article/hukum-qurban-di-mata-allah-swt" class="smoothScroll">Klik Disini</a></li>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.3s">
          <div class="media-object pull-left">
            <img src="<?php echo base_url()?>assets/images/utama.png" class="img-responsive" alt="Food Menu">
            <!-- <span class="menu-price">$64</span> -->
          </div>
          <div class="media-body">
            <h3 class="media-heading">Keutamaan Berkurban</h3>
            <a href=https://dalamislam.com/landasan-agama/al-quran/keutamaan-berkurban" class="smoothScroll">Klik Disini</a></li>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.6s">
          <div class="media-object pull-left">
            <img src="<?php echo base_url()?>assets/images/waktu.jpg" class="img-responsive" alt="Food Menu">
            <!-- <span class="menu-price">$45</span> -->
          </div>
          <div class="media-body">
            <h3 class="media-heading">Waktu Pelaksanaan Berkurban</h3>
            <a href=https://rumaysho.com/2803-waktu-penyembelihan-qurban.html" class="smoothScroll">Klik Disini</a></li>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Team section -->
<section id="team" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Petugas Catat Kurban</h2>
            <h4></h4>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
            <img src="<?php echo base_url()?>assets/images/girl3.jpg" class="img-responsive" alt="Team">  
                <div class="team-des">
                  <h3>Nisvy Syabana Quill</h3>
                  <h4>Manager</h4>
                    <ul class="social-icon">
                      <li><a class="fa fa-instagram" href="#"></a></li>
                      <li><a class="fa fa-twitter" href="#"></a></li>
                    </ul>
                </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="team-thumb">
            <img src="<?php echo base_url()?>assets/images/girl4.jpg" class="img-responsive" alt="Team">  
              <div class="team-des">
                <h3>Penny Wise</h3>
                <h4>Co-Founder</h4>
                  <ul class="social-icon">
                      <li><a href="#" class="fa fa-instagram"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                    </ul>
              </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
          <div class="team-thumb">
            <img src="<?php echo base_url()?>assets/images/girl6.jpg" class="img-responsive" alt="Team">  
              <div class="team-des">
                <h3>Triana Mahenra</h3>
                <h4>Penasehat</h4>
                  <ul class="social-icon">
                      <li><a href="#" class="fa fa-instagram"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
          <div class="team-thumb">
            <img src="<?php echo base_url()?>assets/images/men.jpg" class="img-responsive" alt="Team">  
              <div class="team-des">
                <h3>Aldy Rialdy</h3>
                <h4>Dosen</h4>
                  <ul class="social-icon">
                      <li><a href="#" class="fa fa-instagram"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                  </ul>
              </div>
          </div>
      </div>

      <!-- <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.1s">
          <div class="join-team">
            <i class="fa fa-plus"></i>
            <p>Fusce interdum libero id libero volutpat varius convallis at sem.</p>
            <a href="#" class="btn btn-default hvr-bounce-to-bottom">JOIN US</a>
          </div>
      </div> -->

      <div class="clearfix"></div>

      <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.3s">
        <h2>Ketentuan</h2>
         <p>
          ini mah localhost
        </p>
        <p>
          ngga perlu konek wifi
        </p>
        <p>
          gampang da
        </p>
      </div>

      <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
        <h2>Layanan Catat Kurban!</h2>
         <p>Kami menyediakan jasa mencatat kurban</p>
         <p>Membantu Anda memudahkan dalam mencatat pendaftar kurban
         </p>
      </div>

    </div>
  </div>
</section>

<!-- Gallery section -->
<section id="gallery" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Jenis-jenis Hewan Kurban</h2>
            <h4>"sempurnakan ibadahmu dengan kurban yang layak"</h4>
        </div>
      </div>
        
          <!-- iso section -->
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

            		<ul class="filter-wrapper clearfix">
                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                        <div class="iso-box col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img1.jpg" data-lightbox-gallery="food-gallery">
                              <img src="<?php echo base_url()?>assets/images/unta.jpeg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>UNTA</h3>
                        </div>

                        <div class="iso-box col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img2.jpg" data-lightbox-gallery="food-gallery">
                              <img src="<?php echo base_url()?>assets/images/sapi.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>SAPI</h3>
                        </div>

                        <div class="iso-box col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img3.jpg" data-lightbox-gallery="food-gallery">
                              <img src="<?php echo base_url()?>assets/images/kerbau.jpeg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>KERBAU</h3>
                        </div>

                        <div class="iso-box breakfast col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img4.jpg" data-lightbox-gallery="food-gallery">
                              <img src="<?php echo base_url()?>assets/images/kambing.jpeg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>KAMBING</h3>
                        </div>

                        <div class="iso-box lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img5.jpg" data-lightbox-gallery="food-gallery">
                              <img src="<?php echo base_url()?>assets/images/domba.jpeg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>DOMBA</h3>
                        </div>
                       </div>
                    </div>

          </div>

      </div>

    </div>
  </div>
</section>

<!-- Footer section -->
<footer>
  <section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>Sistem Pencatatan Hewan Kurban</h3>
                <p>Nisvy Sya'bana Nugraha 1177050080</p>
                <p>Peny Agustin 1177050087</p>
                <p>Triana Ridhaswari 1177050116</p>
              </div>  
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Kontak</h3>
                <p>Admin</p>
                <p>081321379362</p>
                <p>catatkurban@gmail.com</p>
              </div> 
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <strong>UAS PBO-B</strong>
                <strong>Teknik Informatika</strong>
                <strong>UIN Sunan Gunung Djati Bandung</strong>
              </div> 

		</div>
	</div>
</footer>

<!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">
        <p>Copyright © Catat Kurban! 2019<a class="designed-by" href="#" target="_blank"></a></p>
      </div>  

      <div class="col-md-4 col-sm-4 text-right">
        <a href="#home" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>

    </div>
  </div>
</section>

<!-- javscript js -->
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
