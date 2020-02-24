<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>ATABA EXPRESS | Tercepat dalam pelayanan !</title>
      <!-- Styling -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" /> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/jquery.dataTables.min.css" />

      <link href="<?php echo site_url('assets/web/css/style.css')?>?v=<?php echo date("YmdHis")?>" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
      <link href="//fonts.googleapis.com/css?family=Roboto%3A400%2C700%7CSource+Sans+Pro%3A700%2C900&amp;subset=latin" rel="stylesheet">

      <script src="<?php echo site_url('assets/web/js/modernizr.custom.24530.js');?>?v=<?php echo date("YmdHis")?>" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.min.js"></script>

      <link rel="shortcut icon" href="images/fav.png">


      <style>
        table.dataTable tbody td {
            word-break: break-word;
            vertical-align: top;
        }
        select, input[type="text"], input[type="email"], input[type="tel"], textarea {
            background: #f5f5f5;
            border-radius: 2px;
            border: 1px solid #eeeeee;
            box-shadow: none;
            width: 100%;
            padding: 5px 5px;
            margin-bottom: 5px;
            font-size: 14px;
            color: #aaaaaa;
            transition: all 100ms ease-out;
        }
      </style>

   </head>
   <body>
      <!-- MAIN PAGE CONTAINER -->
      <div class="boxed-container">
         <!-- TOP BAR -->
         <!-- <div class="top">
            <div class="container">
               <div class="top__tagline">Welcome to our land of opportunities</div>
               <nav class="top__menu">
                  <ul class="top-navigation js-dropdown">
                     <li>
                        <a href="tables.html">Extras</a>
                        <ul class="sub-menu">
                           <li>
                              <a href="tables.html">Tables</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">Buy Now</a>
                     </li>
                     <li>
                        <a href="#" target="_blank">Theme Documentation</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div> -->
         <!-- /.top -->
         <!-- HEADER -->
         <div class="header_container">
            <div class="container">
               <header class="header">
                  <div class="header__logo">
                     <a href="<?php echo site_url()?>">
                     <img class="img-responsive" srcset="<?php echo site_url('assets/web/images/logo.png')?>?v=<?php echo date("YmdHis")?>" alt="CargoPress" src="<?php echo site_url('assets/web/images/logo.png')?>?v=<?php echo date("YmdHis")?>">
                     </a>
                     <button data-target="#cargopress-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                     <span class="navbar-toggle__text">MENU</span>
                     <span class="navbar-toggle__icon-bar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </span>
                     </button>
                  </div>
                  <!-- /.header__logo -->
                  <div class="header__navigation">
                     <nav class="collapse navbar-collapse" id="cargopress-navbar-collapse">
                        <ul class="main-navigation js-main-nav js-dropdown">
                           <!-- <li class="current-menu-item menu-item-has-children">
                              <a href="<?php echo site_url()?>">Home</a>
                              <ul role="menu" class="sub-menu">
                                 <li><a href="<?php echo site_url()?>">Default homepage</a></li>
                                 <li><a href="index_video.html">Homepage with video</a></li>
                                 <li><a href="index_static.html">Homepage with static image</a></li>
                              </ul>
                           </li> -->
                          <li><a href="<?php echo site_url('web')?>">Beranda</a></li>
                          <li><a href="<?php echo site_url('web/berita')?>">Berita</a></li>
                          <li><a href="<?php echo site_url('web/lokasi')?>">Lokasi</a></li>
                          <li><a href="<?php echo site_url('web/tarif')?>">Tarif</a></li>
                          <li><a href="<?php echo site_url('web/tracking')?>">Tracking</a></li>
                           <!-- <li class="menu-item-has-children">
                              <a href="services.html">Services</a>
                              <ul role="menu" class="sub-menu">
                                 <li><a href="ground_transport.html">Ground Transport</a></li>
                                 <li><a href="cargo.html">Cargo</a></li>
                                 <li><a href="warehousing.html">Warehousing</a></li>
                                 <li><a href="logistic_service.html">Logistic Service</a></li>
                                 <li><a href="trucking_service.html">Trucking Service</a></li>
                                 <li><a href="storage.html">Storage</a></li>
                              </ul>
                           </li> -->
                           <li><a href="<?php echo site_url('web/tentang')?>">Tentang</a></li>
                           <li><a href="<?php echo site_url('web/kontak')?>">Kontak</a></li>
                           <!-- <li><a href="tracking.html">Track & Trace</a></li>
                           <li><a href="news.html">News</a></li>
                           <li><a href="contact.html">Contact</a></li> -->
                        </ul>
                     </nav>
                  </div>
                  <!-- /.header__navigation -->
                  <div class="header__widgets">
                     <div class="widget-icon-box">
                        <div class="icon-box">
                           <i class="fa fa-headphones"></i>
                           <h4 class="icon-box__title">Hubungi Kami</h4>
                           <span class="icon-box__subtitle">+62 81-217-088807</span>
                        </div>
                     </div>
                     <div class="widget-icon-box">
                        <div class="icon-box">
                           <i class="fa fa-clock-o"></i>
                           <h4 class="icon-box__title">Jam Operasi</h4>
                           <span class="icon-box__subtitle">08:00 - 18:00</span>
                        </div>
                     </div>
                     <div class="widget-icon-box">
                        <div class="icon-box">
                           <i class="fa fa-envelope-o"></i>
                           <h4 class="icon-box__title">Email Kami</h4>
                           <span class="icon-box__subtitle">info@atabaexpress.com</span>
                        </div>
                     </div>
                     <!-- <a target="_self" class="btn btn-info" id="button_requestQuote">REQUEST A QUOTE</a> -->
                  </div>
                  <!-- /.header__widgets -->
                  <div class="header__navigation-widgets">
                     <a target="_blank" href="https://www.facebook.com/ProteusThemes" class="social-icons__link"><i class="fa fa-facebook"></i></a>
                     <a target="_blank" href="https://twitter.com/chillyorange" class="social-icons__link"><i class="fa fa-twitter"></i></a>
                     <a target="_blank" href="http://themeforest.net/user/chilly_orange/portfolio" class="social-icons__link"><i class="fa fa-wordpress"></i></a>
                     <a target="_blank" href="https://www.youtube.com/user/ProteusNetCompany" class="social-icons__link"><i class="fa fa-youtube"></i></a>
                  </div>
               </header>
            </div>
            <!-- /.container -->
         </div>
         <!-- /.header_container -->
         <?php include $page . ".php";?>
         <!-- FOOTER -->
         <footer class="footer">
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12 col-md-4">
                        <p>
                           <img alt="logo-footer" src="<?php echo site_url('assets/web/images/logo.png')?>?v=<?php echo date("YmdHis")?>" class="logo">
                        </p>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p>
                           <a target="_blank" href="https://www.facebook.com/ProteusThemes" class="icon-container icon-container--square">
                           <span class="fa fa-facebook"></span>
                           </a>
                           <a target="_blank" href="https://twitter.com/ProteusThemes" class="icon-container icon-container--square">
                           <span class="fa fa-twitter"></span>
                           </a>
                           <a target="_blank" href="http://themeforest.net/user/ProteusThemes/portfolio" class="icon-container icon-container--square">
                           <span class="fa fa-wordpress"></span>
                           </a>
                           <a target="_blank" href="https://www.youtube.com/user/ProteusNetCompany" class="icon-container icon-container--square">
                           <span class="fa fa-youtube-play"></span>
                           </a>
                        </p>
                     </div>
                     <!-- /.row -->
                     <div class="col-xs-12 col-md-2">
                        <div class="widget_nav_menu">
                           <h6 class="footer-top__headings">NAVIGASI</h6>
                           <ul>
                             <li><a href="<?php echo site_url('web')?>">Beranda</a></li>
                             <li><a href="<?php echo site_url('web/berita')?>">Berita</a></li>
                             <li><a href="<?php echo site_url('web/lokasi')?>">Lokasi</a></li>
                             <li><a href="<?php echo site_url('web/tarif')?>">Tarif</a></li>
                             <li><a href="<?php echo site_url('web/tracking')?>">Tracking</a></li>
                             <li><a href="<?php echo site_url('web/tentang')?>">Tentang</a></li>
                             <li><a href="<?php echo site_url('web/kontak')?>">Kontak</a></li>
                              <!-- <li>
                                 <a href="tables.html">Extras</a>
                                 <ul class="sub-menu">
                                    <li>
                                       <a href="tables.html">Tables</a>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#">Buy Now</a>
                              </li>
                              <li>
                                 <a href="#" target="_blank">Theme Documentation</a>
                              </li> -->
                           </ul>
                        </div>
                        <!-- /.widget_nav_menu -->
                     </div>
                     <!-- /.row -->
                     <div class="col-xs-12 col-md-2">
                        <div class="widget_nav_menu">
                           <h6 class="footer-top__headings">OUR SERVICES</h6>
                           <ul>
                              <li>
                                 <a href="services.html">All Services</a>
                              </li>
                              <li>
                                 <a href="ground_transport.html">Ground Transport</a>
                              </li>
                              <li>
                                 <a href="cargo.html">Cargo</a>
                              </li>
                              <li>
                                 <a href="warehousing.html">Warehousing</a>
                              </li>
                              <li>
                                 <a href="logistic_service.html">Logistic Service</a>
                              </li>
                              <li>
                                 <a href="trucking_service.html">Trucking Service</a>
                              </li>
                              <li>
                                 <a href="storage.html">Storage</a>
                              </li>
                           </ul>
                        </div>
                        <!-- /.widget_nav_menu -->
                     </div>
                     <!-- /.row -->
                     <div class="col-xs-12 col-md-4">
                        <h6 class="footer-top__headings">HUBUNGI KAMI</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <!-- <p>
                           <a target="_blank" href="#" class="btn btn-info">BUY CARGOPRESS</a>
                        </p> -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.footer -->
            </div>
            <!-- /.footer-top -->
            <div class="footer-bottom">
               <div class="container">
                  <!-- <div class="footer-bottom__left">
                     CargoPress Theme Made by <a href="https://www.proteusthemes.com/">ProteusThemes</a>.
                  </div> -->
                  <div class="footer-bottom__right">
                     Copyright &copy; 2009&ndash;2017 Ataba Express. All rights reserved.
                  </div>
               </div>
               <!-- /.container -->
            </div>
            <!-- /.footer-bottom -->
         </footer>
      </div>
      <!-- /.boxed-container -->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
      <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDy5ePPPOnm2Ix6_MU7SGsUX4QzrHfH1t4&sensor=false"></script>
      <script src="<?php echo site_url('assets/web/js/SimpleMap.js')?>?v=<?php echo date("YmdHis")?>"></script>
      <script src="<?php echo site_url('assets/web/js/NumberCounter.js')?>?v=<?php echo date("YmdHis")?>"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo site_url('assets/web/js/custom.js')?>?v=<?php echo date("YmdHis")?>"></script>
   </body>
</html>
