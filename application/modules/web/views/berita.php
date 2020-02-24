<!-- MAIN TITLE -->
<div class="main-title">
   <div class="container">
      <h1 class="main-title__primary">Berita</h1>
      <h3 class="main-title__secondary">Semua yang terjadi disekitar Ataba Express</h3>
   </div>
</div>
<!-- /.main-title -->
<!-- BREADCRUMBS -->
<div class="breadcrumbs">
   <div class="container">
      <span>
      <a class="home" href="<?php echo site_url()?>" title="Go to CargoPress." rel="v:url">AtabaExpress</a>
      </span>
      <span>
      <span>Berita</span>
      </span>
   </div>
</div>
<!-- /.breadcrumbs -->
<div class="container">
   <div class="row margin-bottom-30">
      <div class="col-xs-12 col-md-9">
				<?php foreach ($berita->result_array() as $b) { ?>
					<article class="clearfix hentry">
						 <a href="article.html">
						 <img alt="placeholder" class="img-responsive" src="<?php echo load_image('uploads/' . $b['gambar'],848,480);?>">
						 </a>
						 <div class="meta-data">
								<time class="meta-data__date" datetime="2015-05-06T15:00:06+00:00"><?php echo $b['tgl']?></time>
								<span class="meta-data__separator">/</span>
								<span class="meta-data__author">By Jaka Smid</span>
						 </div>
						 <h2 class="hentry__title"><a href="<?php echo site_url('web/baca-berita/' . $b['slug'])?>"><?php echo $b['judul']?></a></h2>
						 <div class="hentry__content">
								<?php echo limit_text($b['konten'],200)?>

								<p style="padding-top:10px">
									 <a class="more-link" href="<?php echo site_url('web/baca-berita/' . $b['slug'])?>">
									 <span class="btn btn-default btn--post">Read More</span>
									 </a>
								</p>
						 </div>
					</article>
				<?php } ?>

         <nav class="navigation pagination">
            <h2 class="screen-reader-text">Posts navigation</h2>
            <div class="nav-links">
               <!-- <span class="page-numbers current">1</span>
               <a href="news.html" class="page-numbers">2</a>
               <a href="news.html" class="page-numbers">3</a>
               <a href="news.html" class="next page-numbers"><i class="fa fa-caret-right"></i></a> -->
							 <?php echo $this->pagination->create_links();?>
						</div>

         </nav>
      </div>
      <!-- /.col -->
      <div class="col-xs-12 col-md-3">
         <div class="sidebar">
            <div class="widget_search">
               <form action="#" class="search-form" method="get">
                  <label>
                  <span class="screen-reader-text">Search for:</span>
                  <input type="search" name="s" value="" placeholder="Search ..." class="search-field">
                  </label>
                  <button class="search-submit" type="submit"><i class="fa fa-lg fa-search"></i></button>
               </form>
            </div>
            <div class="widget_recent_entries">
               <h4 class="sidebar__headings">RECENT POSTS</h4>
               <ul>
								 <?php foreach ($berita_terbaru->result_array() as $bt) { ?>
									 <li>
										 <a href="<?php echo site_url('web/baca-berita/' . $bt['slug'])?>"><?php echo $bt['judul']?></a>
									 </li>
								 <?php } ?>
               </ul>
            </div>


         </div>
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
</div>
<!-- /.container -->
