<div class="panel panel-<?php echo $status['jenis'] == 'bermasalah' ? 'danger' : 'primary'?>">
  <div class="panel-heading">
    <h3 class="panel-title"><h3>STATUS : <?php echo strtoupper($status['nama'])?></h3></h3>
  </div>
  <div class="panel-body">

    <form action="" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Kode Tracking</label>
        <input type="text" class="form-control" id="tracking_code" name="tracking_code" placeholder="Kode Tracking" autocomplete="off">
      </div>
      <div class="form-group">
        <table class="table table-bordered">
          <!-- <thead>
            <tr>
              <th>&nbsp</th>
              <th>&nbsp</th>
            </tr>
          </thead> -->
          <tbody id="tbody">
            <tr>
              <td>KODE TRACKING</td>
              <td>{TRACKING CODE}</td>
            </tr>
            <tr>
              <td>STATUS</td>
              <td></td>
            </tr>
            <tr>
              <td>ASAL PAKET</td>
              <td></td>
            </tr>
            <tr>
              <td>TUJUAN PAKET</td>
              <td></td>
            </tr>
            <tr>
              <td>PENGIRIM</td>
              <td></td>
            </tr>
            <tr>
              <td>PENERIMA</td>
              <td></td>
            </tr>
            <tr>
              <td>DETAIL</td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <button id="btn_submit" disabled type="submit" class="btn btn-<?php echo $status['jenis'] == 'bermasalah' ? 'danger' : 'success'?> btn-lg pull-right">Ganti Status</button>
        <a href="<?php echo site_url('cabang') ?>" class="btn btn-warning btn-lg pull-right" style="margin-right:10px">kembali</a>
      </div>
    </form>
  </div>

</div>

<script>

  function detail_paket(tracking_code){
    // alert(tracking_code);
    $.get( "<?php echo site_url('cabang/detail_paket')?>", {
        tracking_code: tracking_code
      }
    )
    .done(function( data ) {
      $('#btn_submit').attr("disabled", true);
      if(data == 'NOT_FOUND'){
        $('#tbody').html('<tr><td colspan=2><div class="alert alert-danger">Kode Tracking tidak ditemukan</div></td></tr>');
      }else{
        $('#btn_submit').removeAttr("disabled");
        $('#tbody').html(data);
      }

    });
  }

  $('#tracking_code').keyup( function() {
      var tracking_code = $('#tracking_code').val();
      detail_paket(tracking_code);
  });

  $("#tracking_code").bind('paste', function(event) {
      var _this = this;
      // Short pause to wait for paste to complete
      setTimeout( function() {
          var text = $(_this).val();
          detail_paket(text);
      }, 100);
   });

</script>
