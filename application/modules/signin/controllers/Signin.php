<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->database();

        $this->load->library(array('form_validation', 'alert','recaptcha'));
        $this->load->helper(array('url','libs'));
    }

    public function index()
    {
        // $this->db->where('username' ,'admin');
        // $this->db->update('admin_users',array('password' => $this->bcrypt->hash_password('admin')));
        // echo get_settings('google_auth');
        $captcha_answer = $this->input->post('g-recaptcha-response');
        $response       = $this->recaptcha->verifyResponse($captcha_answer);

        // if ($response['success']) {
          $this->form_validation->set_rules('username', 'Username', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');

          if ($this->form_validation->run() == true) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->db->get_where('user',array('username' => $username,'password' => md5($password)));
            if($cek->num_rows() > 0){

              $user = $cek->row_array();

              $this->session->set_userdata(
                array(
                  'user_id'           => $user['id'],
                  'user_username'     => $user['username'],
                  'user_level'        => $user['level'],
                  'akses_cabang'      => $user['akses_cabang']
                )
              );

              redirect(site_url($user['level']),'reload');
            }
          }
        // }

        $this->load->view('signin');
    }


}
