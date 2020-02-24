<style>
  .thumbnail{
    color:rgb(235, 23, 23);
  }
</style>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">MENU</h3>
  </div>

  <div class="panel-body">
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($kode_bermasalah->result_array() as $kb) { ?>
          <li><strong><?php echo $kb['kode']?></strong> ( <?php echo $kb['keterangan'] ?>)</li>
        <?php } ?>
      </ul>
    </div>
    <div class="col-lg-3" style="text-align: center;">
      <a href="<?php echo site_url('cabang')?>">
        <i class="fa fa-angle-double-left" style="font-size: 80px; margin: 10px 0"></i><br>
        <h4 class="">Kembali</h4>
      </a>
    </div>
    <?php foreach ($kode_bermasalah->result_array() as $kb) { ?>
      <div class="col-lg-3" style="text-align: center;">
        <a href="<?php echo site_url('cabang/paket-status/' . $kb['kode'])?>" class="thumbnail">
          <i class="<?php echo $kb['css_class']?>" style="font-size: 80px; margin: 10px 0"></i><br>
          <h4 class=""><?php echo $kb['kode']?></h4>
        </a>
      </div>
    <?php } ?>



  </div>
</div>
