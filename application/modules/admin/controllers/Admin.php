<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MX_Controller
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
        $this->load->model('Admin_model','admin_m');

        $level = $this->session->userdata('user_level');
        if($level !== 'admin'){
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
        $this->breadcrumbs->push('Dashboard', '/admin');

        $data['page_name'] = 'beranda';
        $data['page_title'] = 'Beranda';
        $this->_page_output($data);
    }

    // function test_generate_barcode(){
    //   generate_barcode('test',str_pad('203529',10,STR_PAD_LEFT));
    // }

    // function bukti_pendaftaran($pendaftar_id){
    //   bukti_pendaftaran($pendaftar_id,false);
    // }

    public function export_data(){
      $param = explode('/', base64url_decode($this->uri->segment(3)));
      //'pdf/' . $this->uri->segment(3) . '/semua'
      $file_type = $param[0];
      $slug_kategori = $param[1];
      $range = $param[2];

      switch ($file_type) {
        case 'pdf':
          $kategori = $this->db->get_where('kategori',array('slug' => $slug_kategori))->row_array();
          if($range === 'semua'){
            //semua
            $recordset = null;

            if($kategori['level_penerima'] === 'pelajar'){
              //pelajar
              $this->db->select(
                "nik,nama_lengkap,alamat_rumah,kota_lahir,
                 tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                 email,nama_lembaga AS `Nama Sekolah`,kelas,semester");

              $this->db->order_by('nama_lengkap','ASC');

              $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

            }else{
              //mahasiswa
              $this->db->select(
                "nik,nama_lengkap,alamat_rumah,kota_lahir,
                 tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                 email,nama_lembaga AS `Nama Universitas`,
                 program_studi,akreditasi,semester,ip_semester");

              $this->db->order_by('ip_semester','DESC');

              $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

            }

            $ctlObj = modules::load('admin/export/')->pdf('semua-' . $slug_kategori,$recordset);

          }else{
            //terpilih
            $recordset = null;

            if($kategori['level_penerima'] === 'pelajar'){
              //pelajar
              $this->db->select(
                "nik,nama_lengkap,alamat_rumah,kota_lahir,
                 tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                 email,nama_lembaga AS `Nama Sekolah`,kelas,semester");

              $this->db->order_by('nama_lengkap','ASC');
              $this->db->where('status','diterima');

              $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

            }else{
              //mahasiswa
              $this->db->select(
                "nik,nama_lengkap,alamat_rumah,kota_lahir,
                 tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                 email,nama_lembaga AS `Nama Universitas`,
                 program_studi,akreditasi,semester,ip_semester");
              $this->db->where('status','diterima');
              $this->db->order_by('ip_semester','DESC');

              $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

            }

            $ctlObj = modules::load('admin/export/')->pdf('terpilih-' . $slug_kategori,$recordset);

          }

          break;

          case 'excel':
            $kategori = $this->db->get_where('kategori',array('slug' => $slug_kategori))->row_array();
            if($range === 'semua'){
              //semua
              $recordset = null;

              if($kategori['level_penerima'] === 'pelajar'){
                //pelajar
                $this->db->select(
                  "nik,nama_lengkap,alamat_rumah,kota_lahir,
                   tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                   email,nama_lembaga AS `Nama Sekolah`,kelas,semester");

                $this->db->order_by('nama_lengkap','ASC');

                $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

              }else{
                //mahasiswa
                $this->db->select(
                  "nik,nama_lengkap,alamat_rumah,kota_lahir,
                   tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                   email,nama_lembaga AS `Nama Universitas`,
                   program_studi,akreditasi,semester,ip_semester");

                $this->db->order_by('ip_semester','DESC');

                $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

              }

              $ctlObj = modules::load('admin/export/')->excel('semua-' . $slug_kategori,$recordset);

            }else{
              //terpilih
              $recordset = null;

              if($kategori['level_penerima'] === 'pelajar'){
                //pelajar
                $this->db->select(
                  "nik,nama_lengkap,alamat_rumah,kota_lahir,
                   tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                   email,nama_lembaga AS `Nama Sekolah`,kelas,semester");

                $this->db->order_by('nama_lengkap','ASC');
                $this->db->where('status','diterima');

                $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

              }else{
                //mahasiswa
                $this->db->select(
                  "nik,nama_lengkap,alamat_rumah,kota_lahir,
                   tgl_lahir,jk AS jenis_kelamin,no_hp AS `Nomor HP`,
                   email,nama_lembaga AS `Nama Universitas`,
                   program_studi,akreditasi,semester,ip_semester");
                $this->db->where('status','diterima');
                $this->db->order_by('ip_semester','DESC');

                $recordset = $this->db->get_where('pendaftar',array('kategori_id' => $kategori['id']));

              }

              $ctlObj = modules::load('admin/export/')->excel('terpilih-' . $slug_kategori,$recordset);

            }

            break;

        default:
          # code...
          break;
      }
    }



    public function kantor_cabang(){
      try {
          $this->load->library(array('grocery_CRUD'));
          $crud = new Grocery_CRUD();

          $crud->set_table('cabang');
          $crud->set_subject('Kantor');

          $crud->required_fields('nama', 'alamat');

          $crud->columns('nama','kantor_pusat', 'alamat', 'telp','pegawai');

          $crud->callback_column('pegawai', function($value,$row){
            return '<a href="' . site_url('admin/pegawai/' . $row->id) .'">Lihat</a>';
          });

          $state = $crud->getState();
          if ($state === 'edit') {
            $id = $this->uri->segment(4);
            $crud->set_relation('kantor_pusat','cabang','nama',array('id <>' => $id));
          } else {
            $crud->set_relation('kantor_pusat','cabang','nama');
          }


          $this->breadcrumbs->push('Dashboard', '/admin');
          $this->breadcrumbs->push('Kantor Cabang', '/admin/kantor-cabang');

          $extra = array('page_title' => 'Kantor Cabang');
          $output = $crud->render();

          $output = array_merge((array) $output, $extra);

          $this->_page_output($output);
      } catch (Exception $e) {
          show_error($e->getMessage().' --- '.$e->getTraceAsString());
      }
    }


    public function pegawai($cabang_id){
      try {
          $this->load->library('grocery_CRUD');

          $crud = new Grocery_CRUD();

          $crud->set_table('pegawai');
          $crud->set_subject('Pegawai');
          $crud->where('cabang_id', $cabang_id);

          $crud->columns('nama','telp');

          $crud->required_fields('nama', 'alamat','telp','jam_kerja');

          $crud->field_type('cabang_id', 'hidden', $cabang_id);

          $this->breadcrumbs->push('Dashboard', '/admin');
          $this->breadcrumbs->push('Kantor Cabang', '/admin/kantor-cabang');
          $this->breadcrumbs->push('Pegawai', '/admin/pegawai');


          $extra = array('page_title' => 'Pegawai' );
          $output = $crud->render();

          $output = array_merge((array) $output, $extra);

          $this->_page_output($output);
      } catch (Exception $e) {
          show_error($e->getMessage().' --- '.$e->getTraceAsString());
      }

    }

    public function status(){
      try {
          $this->load->library('grocery_CRUD');

          $crud = new Grocery_CRUD();

          $crud->set_table('status');
          $crud->set_subject('Data Status');

          $crud->columns('kode','nama','keterangan');
          $crud->required_fields('kode','nama');

          $this->breadcrumbs->push('Dashboard', '/admin');
          $this->breadcrumbs->push('Data Status', '/admin/status');


          $extra = array('page_title' => 'Data status' );
          $output = $crud->render();

          $output = array_merge((array) $output, $extra);

          $this->_page_output($output);
      } catch (Exception $e) {
          show_error($e->getMessage().' --- '.$e->getTraceAsString());
      }

    }


    public function web_slideshow(){
      try {
          $this->load->library('grocery_CRUD');

          $crud = new Grocery_CRUD();

          $crud->set_table('web_slideshow');
          $crud->set_subject('Web Slideshow');

          $crud->columns('judul','deskripsi');
          $crud->required_fields('judul','deskripsi','slideshow_image');

          $this->breadcrumbs->push('Dashboard', '/admin');
          $this->breadcrumbs->push('Web Slideshow', '/admin/web-slideshow');

          $crud->set_field_upload('slideshow_image','uploads/slideshow');

          $extra = array('page_title' => 'Web Slideshow' );
          $output = $crud->render();

          $output = array_merge((array) $output, $extra);

          $this->_page_output($output);
      } catch (Exception $e) {
          show_error($e->getMessage().' --- '.$e->getTraceAsString());
      }

    }

    public function ongkir(){
      try {
          $this->load->library('grocery_CRUD');

          $crud = new Grocery_CRUD();

          $crud->set_table('ongkir');
          $crud->set_subject('Daftar Ongkir');

          $crud->columns('cabang_asal','cabang_tujuan','biaya','perkiraan_waktu');

          // $cabang_list = array();
          // $cab = $this->db->get_where('cabang',array('jenis'=> 'asal'));
          // foreach ($cab->result_array() as $c) {
          //   $cabang_list[$c['id']] = $c['nama'];
          // }
          //
          //
          // $crud->field_type('cabang_asal','dropdown',$cabang_list);
          // $crud->field_type('cabang_tujuan','dropdown',$cabang_list);

          $crud->set_relation('cabang_asal','cabang','nama',array('jenis' =>'asal'));
          $crud->set_relation('cabang_tujuan','cabang','nama',array('jenis' =>'tujuan'));

          $this->breadcrumbs->push('Dashboard', '/admin');
          $this->breadcrumbs->push('Data Ongkir', '/admin/ongkir');

          $extra = array('page_title' => 'Data Ongkir' );
          $output = $crud->render();

          $output = array_merge((array) $output, $extra);

          $this->_page_output($output);
      } catch (Exception $e) {
          show_error($e->getMessage().' --- '.$e->getTraceAsString());
      }

    }



    //<admin_user>
    public function user()
    {
        try {
            $this->load->library('grocery_CRUD');
            $crud = new Grocery_CRUD();

            $crud->set_table('user');
            $crud->set_subject('Data User');


            $crud->add_fields(array('level','username','password','akses_cabang','email'));
            $crud->edit_fields(array('level','username','akses_cabang','email'));

            $crud->required_fields('level', 'username', 'password');
            $crud->callback_before_insert(array($this, 'encrypt_password_callback'));

            $crud->columns('username', 'level','akses_cabang');

            $crud->unique_fields(array('username','email'));

            $cabang_list = array();
            $cab = $this->db->get('cabang');
            foreach ($cab->result_array() as $c) {
              $cabang_list[$c['id']] = $c['nama'];
            }

            $crud->field_type('akses_cabang','dropdown',$cabang_list);

            $crud->unset_read_fields('password');

            $this->breadcrumbs->push('Dashboard', '/admin');
            $this->breadcrumbs->push('Data User', '/admin/user');

            $extra = array('page_title' => 'Data User');
            $output = $crud->render();

            $output = array_merge((array) $output, $extra);

            $this->_page_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    //</admin_user>

    public function encrypt_password_callback($post_array, $primary_key = null)
    {
        $post_array['password'] = md5($post_array['password']);
        return $post_array;
    }

    public function berita()
    {
        try {
            $this->load->library('grocery_CRUD');
            $crud = new Grocery_CRUD();

            $crud->set_table('berita');
            $crud->set_subject('Berita');

            $this->breadcrumbs->push('Dashboard', '/admin');
            $this->breadcrumbs->push('Konten Web', '/admin/berita');

            $crud->required_fields('judul', 'konten');
            $crud->set_field_upload('gambar','uploads');

            $crud->field_type('tgl', 'readonly');
            $crud->columns('judul', 'konten');

            $extra = array('page_title' => 'Berita');
            $output = $crud->render();

            $output = array_merge((array) $output, $extra);

            $this->_page_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }


    //<profile>
    public function ganti_password(){
        $user_id = $this->session->userdata('user_id');

        if (!empty($_POST['pass_lama'])) {

            $password = $this->input->post('pass_lama');

            $cek_user = $this->db->get_where('user', array('id' => $user_id,'password' => md5($password)));

            if ($cek_user->num_rows() > 0) {
                if (empty($_POST['pass_baru']) || empty($_POST['pass_ulangi'])) {
                    $this->alert->set('alert-danger', 'Password baru / ulangan tidak boleh kosong');
                    redirect(site_url('admin/ganti-password'),'reload');
                } else {
                    $pass_baru = $this->input->post('pass_baru');
                    $pass_ulangi = $this->input->post('pass_ulangi');

                    if ($pass_baru !== $pass_ulangi) {
                        $this->alert->set('alert-danger', 'Password baru & ulangan harus sama');
                        redirect(site_url('admin/ganti-password'),'reload');
                    } else {
                        $realname = $this->input->post('realname');
                        $email = $this->input->post('email');

                        $this->db->where('id', $user_id);
                        $this->db->update('user', array('password' => md5($pass_ulangi)));

                        $this->alert->set('alert-success', 'Password berhasil diupdate');
                        redirect(site_url('admin/ganti-password'),'reload');
                    }
                }
            } else {
                $this->alert->set('alert-danger', 'Password Lama Salah');
                redirect(site_url('admin/ganti-password'),'reload');
            }
        }


        $data['page_name'] = 'ganti_password';

        $this->breadcrumbs->push('Beranda', '/admin');
        $this->breadcrumbs->push('Ganti Password', '/admin/ganti_password');

        $data['page_title'] = 'Ganti Password';

        $this->_page_output($data);
    }
    //</profile>

    public function settings(){
        $this->breadcrumbs->push('Dashboard', '/admin');
        $this->breadcrumbs->push('Setting', '/settings');

        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $act = $this->uri->segment(3);
        $param = $this->uri->segment(4);

        if ($act === 'edt-value') {
            $value = $this->input->post('value');

            $this->db->where('title', $param);
            $this->db->update('settings', array('value' => $value));

            exit(0);
        }elseif($act === 'edt-show'){
          $value = $this->input->post('value');

          $this->db->where('title', $param);
          $this->db->update('settings', array('show' => $value));

          exit(0);
        }


        $data['setting'] = $this->db->get('settings');
        $data['page_name'] = 'settings';
        $data['page_title'] = 'Data Settings';

        $this->_page_output($data);
    }


    // public function settings(){
    //   $data['page_name'] = 'settings';
    //   $this->_page_output($data);
    // }

}
