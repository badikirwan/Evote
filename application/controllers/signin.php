<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('m_auth');
  }

	public function index() {
    if(empty($this->session->userdata('username'))){
      $this->load->view('login/login');
    } else {
      redirect('home');
    }

  }

  public function auth() {
    $data = array('username' => $this->input->post('username', TRUE),
                  'password' => md5($this->input->post('password', TRUE))
      );
    $hasil = $this->m_auth->user($data);
    if ($hasil->num_rows() > 0) {
      foreach ($hasil->result() as $sess) {
        $sess_data['logged_in'] = 'Sudah Loggin';
        $sess_data['id']        = $sess->id;
        $sess_data['user_id']   = $sess->user_id;
        $sess_data['username']  = $sess->username;
        $sess_data['nama']      = $sess->nama;
        $sess_data['akses']     = $sess->akses;
        $this->session->set_userdata($sess_data);
      }
        redirect('home');
    }
    else {
      $this->session->set_flashdata('error', 'Maaf, username atau password salah!');
      redirect('signin');
    }
  }
}
