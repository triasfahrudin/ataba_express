<style>
.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 18px;
  color: #c09853;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.alert-heading {
  color: inherit;
}

.alert .close {
  position: relative;
  top: -2px;
  right: -21px;
  line-height: 18px;
}

.alert-danger,
.alert-error {
  color: #b94a48;
  background-color: #f2dede;
  border-color: #eed3d7;
}
</style>
<!-- MAIN TITLE -->
<div class="main-title">
   <div class="container">
      <h1 class="main-title__primary">Tracker</h1>
      <h3 class="main-title__secondary">Know exactly where your cargo/freight is at all times</h3>
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
      <span>Tracking</span>
      </span>
   </div>
</div>
<!-- /.breadcrumbs -->
<?php if(!empty($_POST)){ ?>
  <?php if($route->num_rows() > 0){ ?>

  <!-- MAP -->
  <div class="container">
     <div class="row">
        <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">
           <p>
              Masukkan kode tracking dan klik tombol "Lacak" untuk mengetahui posisi paket anda
           </p>
           <form method="post" action="" class="trackForm clearfix">
              <input type="text" name="tracking_code" required  placeholder="Masukkan kode tracking paket anda disini..." id="name" value="<?php echo $this->input->post('tracking_code')?>">
              <button type="submit" class="btn btn-info">Lacak</button>
           </form>
        </div>
        <!-- /.col -->
     </div>
     <!-- /.row -->
  </div>
  <!-- /.container -->

  <!-- /.map -->
  <div class="container">
     <div class="row margin-bottom-30">
        <div class="col-sm-9">
           <h3 class="widget-title margin-top-0">
              Tracking Paket Anda: <?php $this->input->post('tracking_code')?>
           </h3>
           <h4>Expected arrival: 2015-08-25 16.00</h4>
           <p>
             Tabel di bawah ini menampilkan semua titik arah dan pusat distribusi yang dilalui paket Anda, termasuk Status Paket. <br />Jika ada pertanyaan tentang paket Anda, jangan ragu untuk <a href="<?php echo site_url('web/kontak')?>"> menghubungi kami </a>.
           </p>
           <div class="table-responsive">
              <table class="table">
                 <thead>
                    <tr>
                       <th>Cabang</th>
                       <th class="align-center">Waktu</th>
                       <th class="align-center">Keterangan</th>
                    </tr>
                 </thead>
                 <tbody>
                   <?php
                   $i = 1;
                   foreach ($route->result_array() as $r) { ?>
                     <tr>
                        <td><?php echo $r['cabang']?></td>
                        <td class="align-center"><?php echo $r['tanggal_status']?></td>
                        <td class="align-center">
                          <?php if(($cabang_asal == $r['cabang_id'] && $r['status_paket'] === 'Paket Masuk' && $i == 1)){
                           echo 'Manifest' ;
                         }elseif(($cabang_tujuan == $r['cabang_id'] && $r['status_paket'] === 'Paket Masuk' && $i == $route->num_rows())){
                           echo 'Diterima cabang ditujuan' ;
                         }else{
                           echo  $r['status_paket'];
                         }?>

                        </td>
                     </tr>
                   <?php $i++;} ?>
                 </tbody>
              </table>
           </div>
           <!-- /.table-responsive -->
        </div>
        <!-- /.col -->
        <div class="col-sm-3 hentry">
           <div class="widget_black-studio-tinymce">
              <div class="featured-widget">
                 <h3 class="widget-title">
                    <span class="widget-title__inline">CONTACT DETAILS</span>
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
                    OPENING TIME
                    <span class="icon icons-ornament-right"></span>
                 </h3>
                 <dl class="week-day ">
                    <dt>Monday</dt>
                    <dd>8:00 - 16:00</dd>
                 </dl>
                 <dl class="week-day  light-bg">
                    <dt>Tuesday</dt>
                    <dd>8:00 - 16:00</dd>
                 </dl>
                 <dl class="week-day ">
                    <dt>Wednesday</dt>
                    <dd>8:00 - 16:00</dd>
                 </dl>
                 <dl class="week-day  light-bg">
                    <dt>Thursday</dt>
                    <dd>8:00 - 16:00</dd>
                 </dl>
                 <dl class="week-day ">
                    <dt>Friday</dt>
                    <dd>8:00 - 16:00</dd>
                 </dl>
                 <dl class="week-day  light-bg">
                    <dt>Saturday</dt>
                    <dd>8:00 - 16:00</dd>
                 </dl>
                 <dl class="week-day  closed today">
                    <dt>Sunday</dt>
                    <dd>CLOSED</dd>
                 </dl>
              </div>
              <!-- /.featured-widget -->
           </div>
           <!-- /.widget_pw_opening_time -->
        </div>
        <!-- /.col -->
     </div>
     <!-- /.row -->
  </div>
  <!-- /.container -->
  <?php }else{ ?>
  <div class="container">
     <div class="row">
        <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">
           <div class="alert alert-danger">
              <strong>Peringatan!</strong> Kode tracking tidak dapat ditemukan.
           </div>
           <p>
              Masukkan kode tracking dan klik tombol "Lacak" untuk mengetahui posisi paket anda
           </p>
           <form method="post" action="" class="trackForm clearfix">
              <input type="text" name="tracking_code" required  placeholder="Masukkan kode tracking paket anda disini..." id="name" value="<?php echo $this->input->post('tracking_code')?>">
              <button type="submit" class="btn btn-info">Lacak</button>
           </form>
        </div>
        <!-- /.col -->
     </div>
     <!-- /.row -->
  </div>
  <!-- /.container -->
  <?php } ?>
<?php }else{ ?>
  <div class="container">
     <div class="row">
        <div class="col-sm-8 col-sm-offset-2 margin-bottom-60">
           <p>
              Masukkan kode tracking dan klik tombol "Lacak" untuk mengetahui posisi paket anda
           </p>
           <form method="post" action="" class="trackForm clearfix">
              <input type="text" name="tracking_code" required  placeholder="Masukkan kode tracking paket anda disini..." id="name" value="<?php echo $this->input->post('tracking_code')?>">
              <button type="submit" class="btn btn-info">Lacak</button>
           </form>
        </div>
        <!-- /.col -->
     </div>
     <!-- /.row -->
  </div>
  <!-- /.container -->
<?php } ?>
