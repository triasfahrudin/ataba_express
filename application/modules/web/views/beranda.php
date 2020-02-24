<script>
/* Google Map Market Settings */

var mapMarkers = [
  {
    "id": "1",
    "title": "CargoPress",
    "address": "Changi Airport, Singapore",
    "custompinimage": "<?php echo site_url('assets/web/images/pin.png')?>"
  }
]
</script>
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron--with-captions">
   <div data-interval="5000" data-ride="carousel" id="headerCarousel" class="carousel slide">
      <div class="carousel-inner">
        <?php $i = 1;foreach ($slideshow->result_array() as $ss) { ?>
          <div class="item <?php echo $i == 1 ? 'active':'' ?>">
             <img alt="UNBEATABLE TRUCKING AND TRANSPORT SERVICES" sizes="100vw" srcset="<?php echo load_image('uploads/slideshow/' . $ss['slideshow_image'],1366,426)?>?v=<?php echo date("YmdHis")?> 1920w, <?php echo load_image('uploads/slideshow/' . $ss['slideshow_image'],425,200)?>?v=<?php echo date("YmdHis")?> 425w" src="<?php echo load_image('uploads/slideshow/' . $ss['slideshow_image'],1366,426)?>?v=<?php echo date("YmdHis")?>">
             <div class="container">
                <div class="jumbotron-content">
                   <div class="jumbotron-content__title">
                      <h1><?php echo $ss['judul']?></h1>
                   </div>
                   <div class="jumbotron-content__description">
                      <p class="p1">
                         <span class="s1"><?php echo $ss['deskripsi']?></span>
                      </p>
                      <!-- <p>
                         <a target="_self" href="services.html" class="btn btn-primary">OUR SERVICES</a> &nbsp;<a target="_self" href="contact.html" class="btn btn-secondary">GET IN TOUCH</a>
                      </p> -->
                      <div class="w69b-screencastify-mouse"></div>
                   </div>
                </div>
             </div>
          </div>
        <?php $i++;} ?>

      </div>
      <!-- /.carousel-inner -->
      <div class="container">
         <a data-slide="prev" role="button" href="#headerCarousel" class="left jumbotron__control">
         <i class="fa  fa-caret-left"></i>
         </a>
         <a data-slide="next" role="button" href="#headerCarousel" class="right jumbotron__control">
         <i class="fa  fa-caret-right"></i>
         </a>
      </div>
      <!-- /.container -->
   </div>
   <!-- /.carousel -->
</div>
<!-- /.jumbotron -->
<!-- OUR SERVICES -->
<div class="container" role="main">

   <!-- /.row -->
   <div class="row">
      <div class="col-sm-12">
         <h3 class="widget-title big lined">
            <span>LAYANAN KAMI</span>
         </h3>
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
   <div class="row">
      <div class="col-sm-4">
         <div class="widget_pw_icon_box margin-bottom-30">
            <a target="_self" href="#" class="icon-box">
               <i class="fa fa-dropbox"></i>
               <h4 class="icon-box__title">PENGEMASAN</h4>
               <span class="icon-box__subtitle">Kami dapat mengemas paket anda.</span>
            </a>
         </div>
         <!-- /.widget_pw_icon_box -->
         <div class="widget_pw_icon_box margin-bottom-30">
            <a target="_self" href="#" class="icon-box">
               <i class="fa fa-archive"></i>
               <h4 class="icon-box__title">GUDANG</h4>
               <span class="icon-box__subtitle">Kami memiliki gudang yang aman dan luas. Percayakan barang anda pada kami.</span>
            </a>
         </div>
         <!-- /.widget_pw_icon_box -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4">
         <div class="widget_pw_icon_box margin-bottom-30">
            <a target="_self" href="#" class="icon-box">
               <i class="fa fa-truck"></i>
               <h4 class="icon-box__title">KARGO</h4>
               <span class="icon-box__subtitle">Serahkan pada kami untuk mengantar paket anda dengan cepat dan aman. </span>
            </a>
         </div>
         <!-- /.widget_pw_icon_box -->
         <div class="widget widget_pw_icon_box margin-bottom-30">
            <a target="_self" href="#" class="icon-box">
               <i class="fa fa-home"></i>
               <h4 class="icon-box__title">PENGIRIMAN DARI PINTU KE PINTU</h4>
               <span class="icon-box__subtitle">Anda memiliki sesuatu untuk diantarkan? Kami lah yang anda cari </span>
            </a>
         </div>
         <!-- /.widget_pw_icon_box -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4">
         <div class="widget_pw_icon_box margin-bottom-30">
            <a target="_self" href="#" class="icon-box">
               <i class="fa fa-globe"></i>
               <h4 class="icon-box__title">PENGANTARAN BANYAK TUJUAN</h4>
               <span class="icon-box__subtitle">Kami dapat mengantarkan paket anda ke semua banyak tujuan didunia. </span>
            </a>
         </div>
         <!-- /.widget_pw_icon_box -->
         <div class="widget_pw_icon_box margin-bottom-30">
            <a target="_self" href="#" class="icon-box">
               <i class="fa fa-road"></i>
               <h4 class="icon-box__title">PENGIRIMAN DARAT</h4>
               <span class="icon-box__subtitle">Mengirimkan barang anda dengan transportasi darat dengan cepat.</span>
            </a>
         </div>
         <!-- /.widget_pw_icon_box -->
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
</div>
<!-- /.conainer -->
<!-- CTA -->
<div class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="call-to-action">
               <div class="call-to-action__text">
                  Tidak yakin tentang solusi bagi bisnis anda?
               </div>
               <div class="call-to-action__button">
                  <a target="_blank" href="contact.html" class="btn btn-primary">HUBUNGI TEAM KAMI</a>
               </div>
            </div>
            <!-- /.call-to-action -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</div>
<!-- /.cta -->
<!-- NEWS -->
<div class="news">
   <div class="container">
      <div class="row">
        <?php foreach ($berita_limit_2->result_array() as $b) { ?>
          <div class="col-sm-4 margin-bottom-30">
             <div class="widget_pw_latest_news">
                <a class="latest-news" href="<?php echo site_url('web/baca-berita/' . $b['slug'])?>">
                   <div class="latest-news__date">
                      <div class="latest-news__date__month"><?php echo $b['bulan_post']?></div>
                      <div class="latest-news__date__day"><?php echo $b['tgl_post']?></div>
                   </div>
                   <img alt="Why choose our warehousing service?" class="wp-post-image" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" srcset="<?php echo load_image('uploads/'. $b['gambar'],360,204,1,0)?> 360w, <?php echo load_image('uploads/'. $b['gambar'],360,204,1,0)?> <?php echo load_image('uploads/'. $b['gambar'],484,480,1,0)?> 848w" src="<?php echo load_image('uploads/'. $b['gambar'],360,204,1,0)?>">
                   <div class="latest-news__content">
                      <h4 class="latest-news__title"><?php echo $b['judul']?></h4>
                      <div class="latest-news__author">By Jaka Smid</div>
                   </div>
                </a>
             </div>
             <!-- /.widget_pw_latest_news -->
          </div>
        <?php } ?>

         <!-- /.col -->

         <!-- /.col -->
         <div class="col-sm-4 margin-bottom-30">
            <div class="widget_pw_latest_news">
              <?php foreach ($berita_limit_3->result_array() as $bl_3) { ?>
                <a class="latest-news  latest-news--inline" href="<?php echo site_url('web/baca-berita/' . $bl_3['slug'])?>">
                   <div class="latest-news__content">
                      <h4 class="latest-news__title"><?php echo $bl_3['judul']?></h4>
                      <div class="latest-news__author">By Jaka Smid</div>
                   </div>
                </a>
              <?php } ?>

               <a class="latest-news  latest-news--more-news" href="<?php echo site_url('web/berita')?>">
               More news
               </a>
            </div>
            <!-- /.widget_pw_latest_news -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</div>
<!-- /.news -->
<!-- VALUES -->
<div class="values margin-bottom-60">
   <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
         <h3>NILAI UTAMA KAMI</h3>
         <p class="text-center">
            <span>WRITTEN BY CARGOPRESS CEO</span>
         </p>
         <hr class="hr-quote">
         <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
         <p class="text-center">
            <img alt="signature" src="<?php echo site_url('assets/web/images/signature.png')?>">
         </p>
      </div>
      <!-- /.col -->
   </div>
   <!-- /.container -->
</div>
<!-- /.values -->
<!-- ABOUT / QUICK QUITE / GALLERY / FAQ -->
<div class="container">
   <div class="row margin-bottom-60">
      <div class="col-sm-6">
         <h3 class="widget-title big lined">
            <span>TENTANG KAMI</span>
         </h3>
         <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
         </p>
      </div>
      <!-- /.col -->
      <div class="col-sm-6" id="quickQuoteForm_wrapper">
         <div class="featured-widget">
            <h3 class="widget-title">
               REQUEST A QUICK QUOTE
            </h3>
            <p>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <form data-toggle="validator" method="post" action="form.php" id="quickQuoteForm" class="aSubmit">
               <div style="display:none"><input type="text" name="maximus" value=""></div>
               <input type="hidden" name="subject" value="CargoPress: Quick Quote Request">
               <div class="contact-form-small">
                  <div class="row">
                     <div class="col-xs-12  col-md-6">
                        <div class="form-group">
                           <input type="text" placeholder="First and Last Name *" aria-invalid="false" aria-required="true" size="40" value="" name="name" required>
                        </div>
                        <div class="form-group">
                           <input type="email" placeholder="E-mail address" aria-invalid="false" aria-required="true" size="40" value="" name="email" required>
                        </div>
                        <select aria-invalid="false" name="service">
                           <option value="Cargo">Cargo</option>
                           <option value="Ground Transport">Ground Transport</option>
                           <option value="Logistic Service">Logistic Service</option>
                           <option value="Storage">Storage</option>
                           <option value="Trucking Service">Trucking Service</option>
                           <option value="Warehousing">Warehousing</option>
                        </select>
                     </div>
                     <div class="col-xs-12  col-md-6">
                        <div class="form-group">
                           <input type="text" placeholder="Subject *" aria-invalid="false" aria-required="true" size="40" value="" name="subject" required>
                        </div>
                        <div class="form-group">
                           <textarea placeholder="Message *" aria-invalid="false" rows="10" cols="40" name="message" required></textarea>
                        </div>
                     </div>
                     <div class="col-xs-12  col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" value="SEND MESSAGE">
                        <img class="ajax-loader" id="loader" src="images/ajax-loader.gif" alt="Sending ..." style="display:none;">
                     </div>
                  </div>
                  <!-- /.row -->
                  <div class="response success">Your message was sent; we'll be in touch shortly!</div>
                  <div class="response error">Unfortunately, we could not sent your message right now. Please try again.</div>
               </div>
               <!-- /.contact-form-small -->
            </form>
         </div>
         <!-- /.featured-widget -->
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->

   <!-- /.row -->
</div>
<!-- /.container -->
<!-- TESTIMONIALS -->
<div class="testimonials">
   <div class="container">
      <div class="row margin-bottom-60">
         <div class="col-sm-12">
            <div class="testimonial">
               <h3 class="widget-title lined big">
                  <span>TESTIMONIALS</span>
               </h3>
               <div class="testimonial__carousel">
                  <a data-slide="prev" href="#testimonalCarousel" class="testimonial__carousel--left">
                  <i aria-hidden="true" class="fa fa-caret-left"></i>
                  <span role="button" class="sr-only">Next</span>
                  </a>
                  <a data-slide="next" href="#testimonalCarousel" class="testimonial__carousel--right">
                  <i aria-hidden="true" class="fa fa-caret-right"></i>
                  <span role="button" class="sr-only">Previous</span>
                  </a>
               </div>
               <!-- /.testimonial__carousel -->
               <div data-interval="false" data-ride="carousel" class="carousel slide" id="testimonalCarousel">
                  <div role="listbox" class="carousel-inner">
                     <div class="item">
                        <div class="row">
                           <div class="col-xs-12  col-sm-6">
                              <blockquote>
                                 <p class="testimonial__quote">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 </p>
                                 <cite class="testimonial__author">
                                 Frank Martin<span class="testimonial__author-description">, Transporter</span>
                                 </cite>
                              </blockquote>
                           </div>
                           <div class="col-xs-12  col-sm-6">
                              <blockquote>
                                 <p class="testimonial__quote">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 </p>
                                 <cite class="testimonial__author">
                                 Martin Frank<span class="testimonial__author-description">, Transporter</span>
                                 </cite>
                              </blockquote>
                           </div>
                        </div>
                     </div>
                     <!-- /.item -->
                     <div class="item active">
                        <div class="row">
                           <div class="col-xs-12  col-sm-6">
                              <blockquote>
                                 <p class="testimonial__quote">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 </p>
                                 <cite class="testimonial__author">
                                 Frank Martin<span class="testimonial__author-description">, Transporter</span>
                                 </cite>
                              </blockquote>
                           </div>
                           <div class="col-xs-12  col-sm-6">
                              <blockquote>
                                 <p class="testimonial__quote">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 </p>
                                 <cite class="testimonial__author">
                                 Martin Frank<span class="testimonial__author-description">, Transporter</span>
                                 </cite>
                              </blockquote>
                           </div>
                        </div>
                     </div>
                     <!-- /.item -->
                  </div>
                  <!-- /.carousel-inner -->
               </div>
               <!-- /.carousel -->
            </div>
            <!-- /.testimonial -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</div>
<!-- /.testimonials -->
<!-- MAP -->
<div class="map margin-bottom-0">
   <div data-type="roadmap" data-zoom="7" data-markers='[{"id":"1","title":"CargoPress","address":"Kalmoesstraat 20, Apeldoorn","custompinimage":"images\/pin.png"}]' class="simple-map js-where-we-are"></div>
</div>
<!-- /.map -->
<!-- OUR PARTNERS -->

<!-- /.container -->
<!-- COUNTERS -->
<div class="counters">
   <div class="container">
      <div  class="widget_pw_number-counter panel-first-child panel-last-child">
         <div data-speed="1000" class="widget-number-counters">
            <div class="number-counter">
               <i class="number-counter__icon fa fa-building-o"></i>
               <div data-to="<?php echo $jumlah_cabang?>" class="number-counter__number js-number">00</div>
               <div class="number-counter__title">Cabang</div>
            </div>
            <div class="number-counter">
               <i class="number-counter__icon fa fa-users"></i>
               <div data-to="<?php echo $jumlah_pegawai?>" class="number-counter__number js-number">00</div>
               <div class="number-counter__title">Pegawai</div>
            </div>
            <div class="number-counter">
               <i class="number-counter__icon fa fa-globe"></i>
               <div data-to="<?php echo $jumlah_coverage?>" class="number-counter__number js-number">00</div>
               <div class="number-counter__title">Negara Tujuan</div>
            </div>
            <div class="number-counter">
               <i class="number-counter__icon fa fa-users"></i>
               <div data-to="25" class="number-counter__number js-number">00</div>
               <div class="number-counter__title">Years of Experiences</div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.container -->
</div>
<!-- /.counters -->
