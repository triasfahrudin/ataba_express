<script>
/* Google Map Market Settings */

var mapMarkers = [
  {
    "id": "1",
    "title": "Ataba Express",
    "address": "-8.212506, 114.376407",
    "custompinimage": "<?php echo site_url('assets/web/images/pin.png')?>"
  }
]
</script>

<!-- MAIN TITLE -->
		<div class="main-title">
			<div class="container">
				<h1 class="main-title__primary">Hubungi kami</h1>
				<h3 class="main-title__secondary">Kami menunggu saran, kritik dan pertanyaan</h3>
			</div>
		</div><!-- /.main-title -->

		<!-- BREADCRUMBS -->
		<div class="breadcrumbs margin-bottom-0">
			<div class="container">
				<span>
					<a class="home" href="<?php echo site_url()?>" title="Go to CargoPress." rel="v:url">AtabaExpress</a>
				</span>
				<span>
					<span>Contact Us</span>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->

		<!-- MAP -->
		<div class="map margin-bottom-60">

			<div data-type="roadmap" data-zoom="11" class="simple-map js-where-we-are"></div>

		</div><!-- /.map -->

		<div class="container">

			<div class="row margin-bottom-30">

				<div class="col-sm-3 hentry">

					<div class="widget_black-studio-tinymce">
						<div class="featured-widget">
							<h3 class="widget-title">
								<span class="widget-title__inline">HUBUNGI KAMI</span>
							</h3>
							<p>
								<strong>CargoPress, Itd.</strong><br>
								227 Marion Street<br>
								Columbia, SC 29201
							</p>
							<p>
								1-888-123-4567<br>
								1-888-123-4568<br>
								<a href="mailto:info@cargopress.com">info@cargopress.com</a>
							</p>
						</div>
					</div>

					<div class="widget_pw_opening_time">

						<div class="featured-widget">
							<h3>
								<span class="icon icons-ornament-left"></span>
							OPERASIONAL
								<span class="icon icons-ornament-right"></span>
							</h3>
							<dl class="week-day ">
								<dt>Senin</dt>
								<dd>8:00 - 16:00</dd>
							</dl>
							<dl class="week-day  light-bg">
								<dt>Selasa</dt>
								<dd>8:00 - 16:00</dd>
							</dl>
							<dl class="week-day ">
								<dt>Rabu</dt>
								<dd>8:00 - 16:00</dd>
							</dl>
							<dl class="week-day  light-bg">
								<dt>Kamis</dt>
								<dd>8:00 - 16:00</dd>
							</dl>
							<dl class="week-day ">
								<dt>Jumat</dt>
								<dd>8:00 - 16:00</dd>
							</dl>
							<dl class="week-day  light-bg">
								<dt>Sabtu</dt>
								<dd>8:00 - 16:00</dd>
							</dl>
							<dl class="week-day  closed today">
								<dt>Minggu</dt>
								<dd>TUTUP</dd>
							</dl>
						</div><!-- /.featured-widget -->

					</div><!-- /.widget_pw_opening_time -->

				</div><!-- /.col -->

				<div class="col-sm-9">

					<h3 class="widget-title margin-top-0">
						SEND US AN EMAIL, OR THREE
					</h3>

					<p>
						But i must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and i will give you a complete count of the system, and expound the actual things of the great explorer idea announcing.
					</p>

					<form data-toggle="validator" method="post" action="form.php" class="aSubmit">
						<div style="display:none"><input type="text" name="maximus" value=""></div>
						<input type="hidden" name="theSubject" value="CargoPress: Contact Request">
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<input type="text" placeholder="First Name*" aria-invalid="false" aria-required="true" size="40" value="" name="your-name" required>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<input type="text" placeholder="Last Name*" aria-invalid="false" aria-required="true" size="40" value="" name="last-name" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<input type="email" placeholder="E-mail address*" aria-invalid="false" aria-required="true" size="40" value="" name="your-email" required>
								</div>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<input type="tel" placeholder="Phone Number" aria-invalid="false" aria-required="true" size="40" value="" name="your-phone">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-8">
								<div class="form-group">
									<input type="text" placeholder="Subject*" aria-invalid="false" size="40" value="" name="your-subject" required>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<textarea placeholder="Message*" aria-invalid="false" rows="10" cols="40" name="your-message" required></textarea>
								</div>
								<input type="submit" class="btn btn-primary" value="SEND MESSAGE">
								<img class="ajax-loader" id="loader" src="<?php echo site_url('assets/web/images/ajax-loader.gif')?>" alt="Sending ..." style="display: none;">
							</div>
						</div>
						<div class="response success">Your message was sent; we'll be in touch shortly!</div>
						<div class="response error">Unfortunately, we could not sent your message right now. Please try again.</div>
					</form>

				</div><!-- /.col -->

			</div><!-- /.row -->

		</div><!-- /.container -->
