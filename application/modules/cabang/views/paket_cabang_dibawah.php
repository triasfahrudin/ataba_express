<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Paket Cabang ini</h3>
  </div>
  <div class="panel-body">
    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Kode Tracking</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                    <th>Pengirim</th>
                    <th>Penerima</th>
                    <th>Posisi</th>
                    <!-- <th></th> -->
                </tr>
            </thead>
            <tbody>
            <?php foreach ($paket->result_array() as $p) { ?>
              <tr>
                  <td><?php echo $p['tracking_code']?></td>
                  <td><?php echo $p['asal']?></td>
                  <td><?php echo $p['tujuan']?></td>
                  <td><?php echo $p['pengirim']?></td>
                  <td><?php echo $p['penerima']?></td>
                  <td><?php echo latest_status($p['id'])?></td>
                  <!-- <td><a target="_blank" class="btn btn-info" href="<?php echo site_url('cabang/cetak-resi/'. $p['tracking_code'])?>">Cetak Resi</a></td> -->
              </tr>
            <?php } ?>
            </tbody>
        </table>

  </div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
