<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/jquery.dataTables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.min.js"></script>

<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Tarif</h1>
    <h3 class="main-title__secondary">Cari tahu tarif pengiriman kami</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="<?php echo site_url()?>" title="Go to CargoPress." rel="v:url">AtabaExpress</a>
    </span>
    <span>
      <span>Tarif</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">
   <div class="row">
      <div class="col-sm-12 margin-bottom-60">
        <table id="example" class="display" cellspacing="0" width="100%">
       <thead>
           <tr>
               <th>Dari</th>
               <th>Tujuan</th>
               <th>Biaya (Per Kg)</th>
               <th>Perkiraan Waktu</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($tarif->result_array() as $tr) { ?>
             <tr>
               <td><?php echo $tr['asal']?></td>
               <td><?php echo $tr['tujuan']?></td>
               <td><?php echo format_rupiah($tr['biaya'])?></td>
               <td><?php echo $tr['perkiraan_waktu']?></td>
             </tr>
           <?php } ?>
       </tbody>
   </table>
      </div>
      <!-- /.col -->
   </div>
   <!-- /.row -->
</div>
<!-- /.container -->
<script>
  $(document).ready(function() {
      $('#example').DataTable();
  } );
</script>
