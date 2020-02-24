
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">MENU</h3>
  </div>
  <div class="panel-body">
    <div class="col-lg-2" style="text-align: center;">
      <a href="<?php echo site_url('cabang/history/cabang-ini')?>" class="thumbnail" style="color:rgba(163, 55, 149, 0.68);">
        <i class="fa fa-home" style="font-size: 80px; margin: 10px 0"></i><br>
        <h4 class="">Cabang ini</h4>
      </a>
    </div>
    <?php if($cabang_dibawah->num_rows() > 0){ ?>
    <div class="col-lg-2" style="text-align: center;">
      <a href="<?php echo site_url('cabang/history/cabang-dibawah')?>" class="thumbnail">
        <i class="fa fa-arrow-circle-down" style="font-size: 80px; margin: 10px 0"></i><br>
        <h4 class="">Cabang dibawah</h4>
      </a>
    </div>
    <?php } ?>
  </div>
</div>
