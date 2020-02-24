
<!-- MAIN TITLE -->
<div class="main-title">
  <div class="container">
    <h1 class="main-title__primary">Lokasi</h1>
    <h3 class="main-title__secondary">Cari tahu lokasi drop poin pengiriman kami</h3>
  </div>
</div><!-- /.main-title -->

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
  <div class="container">
    <span>
      <a class="home" href="<?php echo site_url()?>" title="Go to CargoPress." rel="v:url">AtabaExpress</a>
    </span>
    <span>
      <span>Lokasi</span>
    </span>
  </div>
</div><!-- /.breadcrumbs -->

<div class="container">
   <div class="row">
      <div class="col-sm-12 margin-bottom-60">
        <table id="example" class="cell-border" cellspacing="0" width="100%">
       <thead>
           <tr>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Telp</th>
               <th>WhatsApp</th>
               <th>Jam Kerja</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($lokasi->result_array() as $tr) { ?>
             <tr>
               <td>
                 <?php if($tr['latlng'] != ''){ ?>
                  <a href="https://www.google.com/maps?daddr=<?php echo $tr['latlng']?>" target="_blank"><?php echo $tr['nama']?></a>
                <?php }else{ ?>
                <?php echo $tr['nama']?>
                <?php } ?>
               </td>
               <td><?php echo $tr['alamat']?></td>
               <td><?php echo $tr['telp']?></td>
               <td><?php echo $tr['whatsapp']?></td>
               <td><?php echo $tr['jam_kerja']?></td>
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
    var table = $('#example').DataTable({
                  autoWidth: false,
                  columns : [
                      { width : '50px' },
                      { width : '50px' },
                      { width : '20px' },
                      { width : '50px' },
                      { width : '50px' }
                  ]
                });
  } );
</script>
