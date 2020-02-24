<?php

defined('BASEPATH') or exit('No direct script access allowed');
//https://betterexplained.com/articles/how-to-optimize-your-site-with-gzip-compression/
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();

class Web extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->helper(array('url', 'libs','form','alert'));
        $this->load->database();

        $this->load->libraries(array('session','form_validation','alert','pagination'));
        // $this->load->model('Web_model', 'web_m');

    }


    private function _paginate ($base_url, $total_rows, $per_page, $uri_segment){

            $config = array('base_url' => $base_url,
                        'total_rows' => $total_rows,
                        'per_page' => $per_page,
                        'uri_segment' => $uri_segment);


        $config['attributes'] = array('class' => 'page-numbers');
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '';
        $config['first_tag_close'] = '';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '';
        $config['last_tag_close'] = '';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '';
        $config['next_tag_close'] = '';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '';
        $config['prev_tag_close'] = '';

        $config['cur_tag_open'] = '<span class="page-numbers current">';
        $config['cur_tag_close'] = '</span  >';

        $config['num_tag_open'] = '';
        $config['num_tag_close'] = '';

        return $config;

    }

    private function _render_page($data){
      $data['slideshow'] = $this->db->get('web_slideshow');
      $this->load->view('web/master.php',$data);
      // compress_output();
    }


    public function index()
    {

      $string_select = "judul,slug,konten,gambar,
                         DATE_FORMAT(tgl,'%b %d, %Y') AS tgl,
                         DATE_FORMAT(tgl,'%d') AS tgl_post,
                         DATE_FORMAT(tgl,'%b') AS bulan_post";

      $this->db->select($string_select);
      $this->db->order_by('tgl DESC');
      $data['berita_limit_2'] = $this->db->get('berita',2);

      $this->db->select($string_select);
      $this->db->order_by('tgl DESC');
      $data['berita_limit_3'] = $this->db->get('berita',3,2);

      $data['jumlah_cabang'] = $this->db->get('cabang')->num_rows();
      $data['jumlah_pegawai'] = $this->db->get('pegawai')->num_rows();
      $data['jumlah_coverage'] = $this->db->query("SELECT DISTINCT negara FROM cabang")->num_rows();

      $data['page'] = 'beranda';
      $this->_render_page($data);

    }

    public function tracking()
    {

      $data = array();

      if(!empty($_POST)){

        $tracking_code = $this->input->post('tracking_code');
        $this->db->select('b.nama AS cabang,b.id AS cabang_id,b.latLng,d.nama AS status_paket,
                           a.tanggal_status');
        $this->db->join('cabang b','a.cabang_id = b.id','left');
        $this->db->join('paket c','a.paket_id = c.id','left');
        $this->db->join('status d','a.status_id = d.id','left');
        $this->db->where('c.tracking_code',$tracking_code);
        $this->db->order_by('a.tanggal_status ASC');


        $data['route'] = $this->db->get('tracking_paket a');
        $data['cabang_asal'] = $this->db->get_where('paket',array('tracking_code' => $tracking_code))->row_array()['asal_id'];
        $data['cabang_tujuan'] = $this->db->get_where('paket',array('tracking_code' => $tracking_code))->row_array()['tujuan_id'];
      }

      $data['page'] = 'tracking';
      $this->_render_page($data);

    }

    public function berita()
    {

      $url = site_url('web/berita/');
      $res = $this->db->get('berita')->num_rows();
      $per_page = 5;

      $config = $this->_paginate($url, $res, $per_page, 3);
      $this->pagination->initialize($config);

      $offset = $this->uri->segment(3,0);

      $this->db->select("judul,slug,konten,gambar,DATE(tgl) AS tgl_post, MONTH(tgl) AS bulan_post");
      $this->db->order_by('tgl DESC');
      $data['berita_terbaru'] = $this->db->get('berita',5);

      $this->db->select("judul,slug,konten,gambar,DATE_FORMAT(tgl,'%b %d, %Y') AS tgl");
      $data['berita'] = $this->db->get('berita',$per_page,$offset);

      $data['page'] = 'berita';
      $this->_render_page($data);

    }

    function baca_berita(){
      $slug = $this->uri->segment(3);

      $this->db->select("judul,slug,konten,gambar,
                         DATE_FORMAT(tgl,'%b %d, %Y') AS tgl,
                         DATE_FORMAT(tgl,'%d') AS bulan_post,
                         DATE_FORMAT(tgl,'%b') AS tgl_post, ");
      $berita = $this->db->get_where('berita',array('slug' => $slug));

      if($berita->num_rows()== 0){
        redirect(site_url('web'),'reload');
      }

      $this->db->select("judul,slug,konten,gambar,DATE(tgl) AS tgl_post, MONTH(tgl) AS bulan_post");
      $this->db->order_by('tgl DESC');
      $data['berita_terbaru'] = $this->db->get('berita',5);

      $data['berita'] = $berita->row_array();
      $data['page'] = 'baca-berita';
      $this->_render_page($data);
    }

    public function tentang()
    {
      $data['page'] = 'tentang';
      $this->_render_page($data);

    }

    public function kontak()
    {
      $data['page'] = 'kontak';
      $this->_render_page($data);

    }

    public function lokasi()
    {
      $data['page'] = 'lokasi';
      $data['lokasi'] = $this->db->get('cabang');
      $this->_render_page($data);
    }


    public function tarif()
    {
      $this->db->select('b.nama AS asal,c.nama AS tujuan,a.biaya,a.perkiraan_waktu');
      $this->db->join('cabang b','a.cabang_asal = b.id','left');
      $this->db->join('cabang c','a.cabang_tujuan = c.id','left');
      $data['tarif'] = $this->db->get('ongkir a');
      $data['page'] = 'tarif';
      $this->_render_page($data);

    }


}
