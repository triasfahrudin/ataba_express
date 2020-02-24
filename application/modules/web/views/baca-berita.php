<!-- MAIN TITLE -->
		<div class="main-title">
			<div class="container">
				<h1 class="main-title__primary">Berita</h1>
				<h3 class="main-title__secondary">Semua yang terjadi disekitar Ataba Express</h3>
			</div>
		</div><!-- /.main-title -->

		<!-- BREADCRUMBS -->
		<div class="breadcrumbs">
			<div class="container">
				<span>
					<a class="home" href="<?php echo site_url()?>" title="Go to CargoPress." rel="v:url">AtabaExpress</a>
				</span>
				<span>
					<a href="<?php echo site_url('web/berita')?>" title="Go to News." property="v:title" rel="v:url">Berita</a>
				</span>
				<span>
					<span><?php echo $berita['judul'];?></span>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->

		<div class="container">

			<div class="row margin-bottom-30">

				<div class="col-xs-12 col-md-9">

					<article class="clearfix hentry">
						<a href="article.html">
							<img alt="placeholder" class="img-responsive" src="<?php echo load_image('uploads/' . $berita['gambar'],848,480);?>">
						</a>
						<div class="meta-data">
							<time class="meta-data__date" datetime="2015-05-06T15:00:06+00:00"><?php echo $berita['tgl']?></time>
							<span class="meta-data__separator">/</span>
							<span class="meta-data__author">By Jaka Smid</span>
						</div>
						<h2 class="hentry__title"><?php echo $berita['judul']?></h2>
						<div class="hentry__content">
							<?php echo $berita['konten']?>
						</div>
					</article>



				</div><!-- /.col -->

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
							<h4 class="sidebar__headings">POST TERBARU</h4>
							<ul>
								<?php foreach ($berita_terbaru->result_array() as $bt) { ?>
									<li>
										<a href="<?php echo site_url('web/baca-berita/' . $bt['slug'])?>"><?php echo $bt['judul']?></a>
									</li>
								<?php } ?>

							</ul>
						</div>

					</div>

				</div><!-- /.col -->

			</div><!-- /.row -->

		</div><!-- /.container -->
