<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cabang extends MX_Controller
{
    private $user_id;

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        $this->load->database();
        $this->load->helper(array('url', 'libs','alert'));
        $this->load->library(array('form_validation', 'session','alert','breadcrumbs'));

        $this->breadcrumbs->load_config('default');


        $level = $this->session->userdata('user_level');
        if($level !== 'cabang'){
          redirect(site_url('web'),'reload');
        }

        $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    }


    public function _page_output($output = null)
    {
        $this->load->view('master.php', (array) $output);
    }

    public function index()
    {
        $this->breadcrumbs->push('Dashboard', '/cabang');

        $data['page_name'] = 'beranda';
        $data['page_title'] = 'Beranda';
        $this->_page_output($data);
    }

    public function ganti_password(){
        $user_id = $this->session->userdata('user_id');

        if (!empty($_POST['pass_lama'])) {

            $password = $this->input->post('pass_lama');

            $cek_user = $this->db->get_where('user', array('id' => $user_id,'password' => md5($password)));

            if ($cek_user->num_rows() > 0) {
                if (empty($_POST['pass_baru']) || empty($_POST['pass_ulangi'])) {
                    $this->alert->set('alert-danger', 'Password baru / ulangan tidak boleh kosong');
                    redirect(site_url('cabang/ganti-password'),'reload');
                } else {
                    $pass_baru = $this->input->post('pass_baru');
                    $pass_ulangi = $this->input->post('pass_ulangi');

                    if ($pass_baru !== $pass_ulangi) {
                        $this->alert->set('alert-danger', 'Password baru & ulangan harus sama');
                        redirect(site_url('cabang/ganti-password'),'reload');
                    } else {
                        $realname = $this->input->post('realname');
                        $email = $this->input->post('email');

                        $this->db->where('id', $user_id);
                        $this->db->update('user', array('password' => md5($pass_ulangi)));

                        $this->alert->set('alert-success', 'Password berhasil diupdate');
                        redirect(site_url('cabang/ganti-password'),'reload');
                    }
                }
            } else {
                $this->alert->set('alert-danger', 'Password Lama Salah');
                redirect(site_url('cabang/ganti-password'),'reload');
            }
        }


        $data['page_name'] = 'ganti_password';

        $this->breadcrumbs->push('Beranda', '/cabang');
        $this->breadcrumbs->push('Ganti Password', '/cabang/ganti_password');

        $data['page_title'] = 'Ganti Password';

        $this->_page_output($data);
    }

    // public function buat_paket_baru(){
    //   $this->db->where_not_in('id',array($this->session->userdata('akses_cabang')));
    //   $data['tujuan'] = $this->db->get_where('cabang');
    //   $data['page_title'] = 'Ganti Password';
    //   $data['page_name'] = 'paket_baru';
    //   $this->_page_output($data);
    // }
    //
    // public function paket_masuk(){
    //   $data['page_title'] = 'Ganti Password';
    //   $data['page_name'] = 'paket_masuk';
    //   $this->_page_output($data);
    // }


    public function paket_bermasalah(){
      $this->breadcrumbs->push('Dashboard', '/cabang');

      $this->db->where('jenis','bermasalah');
      $data['kode_bermasalah'] = $this->db->get('status');
      $data['page_name'] = 'paket_bermasalah';
      $data['page_title'] = 'Paket Bermasalah';
      $this->_page_output($data);
    }

    public function cetak_resi(){
      $uri3 = $this->uri->segment(3);
      $data['cabang'] = $this->db->get_where('cabang',array('id' => $this->session->userdata('akses_cabang')))->row_array();
      $data['paket'] = $this->db->get_where('paket',array('tracking_code' => $uri3))->row_array();

      $this->load->view('cetak_resi',$data);
    }

    public function history(){

      $uri3 = $this->uri->segment(3,'default');

      $data = array();

      if($uri3 == 'default'){
        $this->breadcrumbs->push('Dashboard', '/cabang');
        $this->breadcrumbs->push('Histori Paket', '/cabang/history');

        $data['cabang_dibawah'] = $this->db->get_where('cabang',array('kantor_pusat' => $this->session->userdata('akses_cabang')));
        $data['page_name'] = 'history_paket';
        $data['page_title'] = 'Histori Paket';

      }elseif($uri3 === 'cabang-ini'){
        $this->breadcrumbs->push('Dashboard', '/cabang');
        $this->breadcrumbs->push('Histori Paket', '/cabang/history');
        $this->breadcrumbs->push('Cabang ini', '/cabang/history/cabang-ini');

        $this->db->select("a.id,
                           a.tracking_code,
                           b.nama AS tujuan,
                           CONCAT(a.pengirim,'<br />', a.telp_pengirim,'<br />',a.alamat_pengirim) AS pengirim,
                           CONCAT(a.penerima,'<br />',a.telp_pengirim,'<br />',a.alamat_penerima) AS penerima");
        $this->db->join("cabang b","a.tujuan_id = b.id","left");
        $data['paket'] = $this->db->get_where('paket a',array('asal_id' => $this->session->userdata('akses_cabang')));
        $data['page_name'] = 'paket_cabang_ini';
        $data['page_title'] = 'Histori Paket';

      }elseif($uri3 === 'cabang-dibawah'){
        $this->breadcrumbs->push('Dashboard', '/cabang');
        $this->breadcrumbs->push('Histori Paket', '/cabang/history');
        $this->breadcrumbs->push('Cabang dibawah', '/cabang/history/cabang-dibawah');

        $this->db->select("a.id,
                           a.tracking_code,
                           b.nama AS tujuan,
                           c.nama AS asal,
                           CONCAT(a.pengirim,'<br />', a.telp_pengirim,'<br />',a.alamat_pengirim) AS pengirim,
                           CONCAT(a.penerima,'<br />',a.telp_pengirim,'<br />',a.alamat_penerima) AS penerima");
        $this->db->join("cabang b","a.tujuan_id = b.id","left");
        $this->db->join("cabang c","a.asal_id = c.id","left");

        $this->db->where('b.kantor_pusat' ,$this->session->userdata('akses_cabang'));
        $this->db->or_where('c.kantor_pusat' ,$this->session->userdata('akses_cabang'));

        $data['paket'] = $this->db->get('paket a');
        $data['page_name'] = 'paket_cabang_dibawah';
        $data['page_title'] = 'Histori Paket';
      }

      $this->_page_output($data);
    }

    public function ongkir(){
        $tujuan_id = $this->input->get('tujuan_id');
        $asal_id = $this->input->get('asal_id');
        $berat = $this->input->get('berat');

        $cek = $this->db->get_where('ongkir',array('cabang_asal' => $asal_id,'cabang_tujuan' => $tujuan_id));
        if($cek->num_rows() > 0){
          $ongkir = $cek->row_array();
          echo intval($ongkir['biaya']) * intval($berat);
        }else{
          $cek = $this->db->get_where('ongkir',array('cabang_asal' => $tujuan_id,'cabang_tujuan' => $asal_id));
          if($cek->num_rows() > 0){
            $ongkir = $cek->row_array();
            echo intval($ongkir['biaya']) * intval($berat);
          }else{
            echo 'NOT_FOUND';
          }

        }
    }



    public function detail_paket(){
      $tracking_code = $this->input->get('tracking_code');

      $this->db->select("a.id,a.tracking_code,b.nama AS asal_paket,c.nama AS tujuan_paket,
                         CONCAT(a.pengirim,'<br />',a.telp_pengirim,'<br />',a.alamat_pengirim) AS pengirim,
                         CONCAT(a.penerima,'<br />',a.telp_penerima,'<br />',a.alamat_penerima) AS penerima,
                         CONCAT('Isi Paket:',a.isi_paket,'<br />Berat: ',a.berat,' Kg','<br />',a.catatan) AS detail");
      $this->db->join('cabang b','a.asal_id = b.id','left');
      $this->db->join('cabang c','a.tujuan_id = c.id','left');
      $this->db->where('a.tracking_code',$tracking_code);

      $cek = $this->db->get('paket a');

      $tbody = "";
      if($cek->num_rows() > 0){
        $paket = $cek->row_array();

        $tbody = "<tr>
                    <td colspan=2>
                      KODE TRACKING<br />
                      <h3><div class='alert alert-success'>" . $paket['tracking_code'] ."</div></h3>
                    </td>
                  </tr>
                  <tr>
                    <td>STATUS TERBARU</td>
                    <td>" . latest_status($paket['id']) ."</td>
                  </tr>
                  <tr>
                    <td>ASAL PAKET</td>
                    <td>". $paket['asal_paket'] ."</td>
                  </tr>
                  <tr>
                    <td>TUJUAN PAKET</td>
                    <td>". $paket['tujuan_paket'] ."</td>
                  </tr>
                  <tr>
                    <td>PENGIRIM</td>
                    <td>". $paket['pengirim'] ."</td>
                  </tr>
                  <tr>
                    <td>PENERIMA</td>
                    <td>". $paket['penerima'] ."</td>
                  </tr>
                  <tr>
                    <td>DETAIL</td>
                    <td>". $paket['detail'] ."</td>
                  </tr>";
      }else{
        $tbody = "NOT_FOUND";
      }

      echo $tbody;
    }

    public function paket_status(){

      $status_code = $this->uri->segment(3);

      if(!empty($_POST)){
        $cabang_id = $this->session->userdata('akses_cabang');
        $tracking_code = $this->input->post('tracking_code');

        $paket = $this->db->get_where('paket',array('tracking_code' => $tracking_code))->row_array();
        $status = $this->db->get_where('status',array('kode' => $status_code))->row_array();

        $this->db->insert('tracking_paket',array('paket_id' => $paket['id'],'cabang_id' => $cabang_id,'status_id' => $status['id']));

        echo '<script>
                alert("Status berhasil dirubah");
                window.location = "' . site_url('cabang') . '";
              </script>';
      }

      $data['status'] = $this->db->get_where('status',array('kode' => $status_code))->row_array();

      $this->breadcrumbs->push('Dashboard', '/cabang');
      $this->breadcrumbs->push($data['status']['nama'], '/cabang/paket-status/' . $status_code);
      // $this->breadcrumbs->push('Dashboard', '/paket-status');


      $data['page_name'] = 'paket_status';
      $data['page_title'] = 'Beranda';
      $this->_page_output($data);
    }

    public function paket_baru(){
      try {
          $this->load->library(array('grocery_CRUD'));
          $crud = new Grocery_CRUD();

          $asal_id = $this->session->userdata('akses_cabang');

          $crud->set_table('paket');
          $crud->set_subject('Data Paket');
          $crud->where('asal_id',$asal_id);


          $crud->field_type('asal_id', 'hidden', $asal_id);
          $crud->field_type('tracking_code', 'hidden');
          $crud->field_type('tgl_terima', 'hidden');

          $crud->field_type('biaya_kirim', 'hidden');
          $crud->field_type('biaya_total', 'readonly');
          $crud->field_type('ongkir_per_kg', 'hidden');

          $crud->set_relation('tujuan_id','cabang','nama',array('jenis' =>'tujuan'));
          $crud->display_as('tujuan_id','Tujuan');

          $crud->columns('tujuan_id', 'pengirim','biaya_total','cetak_struk');


          $crud->callback_column('cetak_struk', function($value,$row){
            return '<a href="' . site_url('cabang/cetak-struk/' . $row->id) .'">Cetak</a>';
          });


          // $crud->required_fields('tujuan_id','pengirim','telp_pengirim','alamat_pengirim','penerima','telp_penerima','alamat_penerima','berat');

          $this->breadcrumbs->push('Dashboard', '/cabang');
          $this->breadcrumbs->push('Paket Baru', '/cabang/paket-baru');

          $crud->callback_before_insert(array($this, 'hitung_ongkir'));
          $crud->callback_before_update(array($this, 'hitung_ongkir'));

          $crud->set_lang_string(
              'insert_success_message',
               'Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the list page.
               <script type="text/javascript">
                window.location = "'.site_url(strtolower(__CLASS__).'/cabang') .'";
               </script>
               <div style="display:none">'
          );

          $crud->set_lang_string(
              'update_success_message',
               'Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the list page.
               <script type="text/javascript">
                window.location = "'.site_url(strtolower(__CLASS__).'/cabang') .'";
               </script>
               <div style="display:none">'
          );

          // $crud->set_lang_string(
          //     'alert_add_form',
          //      'Your data has been successfully stored into the database.<br/>Please wait while you are redirecting to the list page.
          //      <script type="text/javascript">
          //       window.location = "'.site_url(strtolower(__CLASS__).'/cabang') .'";
          //      </script>
          //      <div style="display:none">'
          // );



          $extra = array('page_title' => 'Kantor Cabang');
          $output = $crud->render();

          $output = array_merge((array) $output, $extra);

          $this->_page_output($output);
      } catch (Exception $e) {
          show_error($e->getMessage().' --- '.$e->getTraceAsString());
      }
    }


    public function hitung_ongkir($post_array, $primary_key = null)
    {
      $asal_id = $post_array['asal_id'];
      $tujuan_id = $post_array['tujuan_id'];
      $berat = $post_array['berat'];

      $cek = $this->db->get_where('ongkir',array('cabang_asal' => $asal_id,'cabang_tujuan' => $tujuan_id));
      if($cek->num_rows() > 0){
        $ongkir = $cek->row_array();
        $post_array['biaya_kirim'] = intval($ongkir['biaya']) * intval($berat);
      }else{
        $cek = $this->db->get_where('ongkir',array('cabang_asal' => $tujuan_id,'cabang_tujuan' => $asal_id));
        if($cek->num_rows() > 0){
          $ongkir = $cek->row_array();
          $post_array['biaya_kirim'] = intval($ongkir['biaya']) * intval($berat);
        }else{
          $post_array['biaya_kirim'] = 0;
        }
      }

      return $post_array;

    }


}
