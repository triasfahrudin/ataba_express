<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>CABANG | ATABA Express</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="<?php echo site_url('assets/peserta/css/custom.css')?>?v=<?php echo date("YmdHis")?>" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

      <?php
        if(isset($css_files)){
          foreach($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
          <?php endforeach;
        }else{ ?>
          <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" >
      <?php }; ?>

      <?php
        if(isset($js_files)){
          foreach($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
          <?php endforeach;
        }else{ ?>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
          <!-- <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script> -->
      <?php }; ?>

      <!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Cookies.js/0.3.1/cookies.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


      <style>
        a.ditolak{color:#ff111f;}
        a.diterima{color:#266927;}
        a { cursor: pointer; cursor: hand;}

        a {  color: #428bca; text-decoration: none;  }
        a:hover, a:focus { color: #2a6496; text-decoration: none;  }
        a:focus { outline: thin dotted;  outline: 5px auto -webkit-focus-ring-color; outline-offset: -2px; }

        .breadcrumb-arrow {  height: 36px; padding: 0; line-height: 36px; list-style: none; background-color: #e6e9ed }
        .breadcrumb-arrow li:first-child a { border-radius: 4px 0 0 4px; -webkit-border-radius: 4px 0 0 4px; -moz-border-radius: 4px 0 0 4px }
        .breadcrumb-arrow li, .breadcrumb-arrow li a, .breadcrumb-arrow li span { display: inline-block; vertical-align: top }
        .breadcrumb-arrow li:not(:first-child) {  margin-left: -5px    }
        .breadcrumb-arrow li+li:before { padding: 0;   content: "" }
        .breadcrumb-arrow li span {  padding: 0 10px }
        .breadcrumb-arrow li a, .breadcrumb-arrow li:not(:first-child) span { height: 36px; padding: 0 10px 0 25px; line-height: 36px }
        .breadcrumb-arrow li:first-child a { padding: 0 10px }
        .breadcrumb-arrow li a { position: relative; color: #fff; text-decoration: none;  background-color: #3bafda;  border: 1px solid #3bafda }
        .breadcrumb-arrow li:first-child a {  padding-left: 10px   }
        .breadcrumb-arrow li a:after, .breadcrumb-arrow li a:before { position: absolute; top: -1px; width: 0; height: 0;  content: ''; border-top: 18px solid transparent;
            border-bottom: 18px solid transparent
        }
        .breadcrumb-arrow li a:before {
            right: -10px;
            z-index: 3;
            border-left-color: #3bafda;
            border-left-style: solid;
            border-left-width: 11px
        }
        .breadcrumb-arrow li a:after {
            right: -11px;
            z-index: 2;
            border-left: 11px solid #2494be
        }
        .breadcrumb-arrow li a:focus, .breadcrumb-arrow li a:hover {
            background-color: #4fc1e9;
            border: 1px solid #4fc1e9
        }
        .breadcrumb-arrow li a:focus:before, .breadcrumb-arrow li a:hover:before {
            border-left-color: #4fc1e9
        }
        .breadcrumb-arrow li a:active {
            background-color: #2494be;
            border: 1px solid #2494be;
        }
        .breadcrumb-arrow li a:active:after, .breadcrumb-arrow li a:active:before {
            border-left-color: #2494be;
        }
        .breadcrumb-arrow li span {
            color: #434a54
        }
      </style>
   </head>
   <body>

      <nav class="navbar navbar-default navbar-static-top">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
               MENU
               </button>
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php echo site_url('cabang')?>">
               USER CABANG
               </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <!-- <form class="navbar-form navbar-left" method="GET" role="search">
                  <div class="form-group">
                     <input type="text" name="q" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
               </form> -->


               <ul class="nav navbar-nav navbar-right">
                  <!-- <li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li> -->
                  <li class="dropdown ">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     <?php echo strtoupper($this->session->userdata('user_username'))?>
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <!-- <li class="dropdown-header">SETTINGS</li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class="divider"></li> -->
                        <li><a href="<?php echo site_url('cabang/ganti-password')?>">Ganti Password</a></li>
                        <li><a href="<?php echo site_url('signout')?>">Logout</a></li>
                     </ul>
                  </li>
               </ul>


            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <div class="container-fluid main-container">


         <div class="col-md-12 content">


           <?php echo $this->breadcrumbs->show();?>
           <?php if(isset($output)){ echo $output; }else{ include $page_name . ".php";} ?>
         </div>
         <footer class="pull-left footer">
            <p class="col-md-12">
            <hr class="divider">
            <!-- Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a> -->
            </p>
         </footer>
      </div>
      <script type="text/javascript">
         $(function () {
          	$('.navbar-toggle-sidebar').click(function () {
          		$('.navbar-nav').toggleClass('slide-in');
          		$('.side-body').toggleClass('body-slide-in');
          		$('#search').removeClass('in').addClass('collapse').slideUp(200);
          	});

          	$('#search-trigger').click(function () {
          		$('.navbar-nav').removeClass('slide-in');
          		$('.side-body').removeClass('body-slide-in');
          		$('.search-input').focus();
          	});
          });

          $(document).ready(function () {
            var index = Cookies.get('active');
            $('.main-menu').find('li').removeClass('active');
            $(".main-menu").find('li').eq(index).addClass('active');
            $('.main-menu').on('click', 'li', function (e) {
                // e.preventDefault();
                $('.main-menu').find('li').removeClass('active');
                $(this).addClass('active');
                Cookies.set('active', $('.main-menu li').index(this));
            });
          });

          <?php if(has_alert()):
            foreach(has_alert() as $type => $message): ?>
            <?php if($type === 'alert-danger'){ ?>
              swal({
                  title: 'Ada kesalahan!',
                  text: '<?php echo $message; ?>',
                  type: 'error',
                  confirmButtonText: 'Ok'
              });
            <?php }else{ ?>
              swal({
                  title: 'Berhasil',
                  text: '<?php echo $message; ?>',
                  type: 'success',
                  confirmButtonText: 'Ok'
              });
           <?php } ?>
            <?php endforeach;
          endif; ?>

          function isEmpty(str) {
              return (!str || 0 === str.length);
          }

          function to_rupiah(bilangan){
            var	number_string = bilangan.toString(),
              	sisa 	= number_string.length % 3,
              	rupiah 	= number_string.substr(0, sisa),
              	ribuan 	= number_string.substr(sisa).match(/\d{3}/g);

              if (ribuan) {
              	separator = sisa ? '.' : '';
              	rupiah += separator + ribuan.join('.');
              }

              return "Rp." + rupiah;

          }

          function biaya_total(){
            var tujuan_id = $('#field-tujuan_id').val();
            var asal_id = $('#field-asal_id').val();
            var berat = isEmpty($('#field-berat').val()) ? '0': $('#field-berat').val();

            $.get( "<?php echo site_url('cabang/ongkir')?>", {
                tujuan_id: tujuan_id,
                asal_id: asal_id ,
                berat : berat
              }
            )
            .done(function( data ) {
              if(data == 'NOT_FOUND'){
                alert('Ongkir tujuan belum ada');
                var alert_not_found = '<div class="alert alert-danger">Ongkir tujuan belum ada</div>';
                $('#field-biaya_kirim').html(alert_not_found);
                $('#field-biaya_total').html(alert_not_found);
              }else{
                var ongkir = parseInt(data);
                var biaya_packing = parseInt(isEmpty($('#field-biaya_packing').val()) ? '0': $('#field-biaya_packing').val());

                $('#field-biaya_kirim').html(to_rupiah(ongkir));

                $('#field-biaya_total').html('(@' + to_rupiah(ongkir) + " x " + berat  +  " KG) + biaya packing = " + to_rupiah(ongkir + biaya_packing));
              }

            });
          }

          // function biaya_total(){
          //   var biaya_packing = parseInt($('#field-biaya_packing').val());
          // }

          $('#field-berat, #field-biaya_packing').keyup( function() {
            biaya_total();
          });

          $('#field-tujuan_id').chosen().change(function(){
            biaya_total();
          });

      </script>
   </body>
</html>
