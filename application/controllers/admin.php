<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$user = $this->session->userdata('username');
		if (empty($user)) {
			$this->load->view('login/login');
		} else {
			$status = $this->session->userdata('level');
			if ($status == 'admin') {
				$this->template->load('admin/dashboard', 'admin/home');
			} else {
				# code...
			}
			
		}
		
	}

	public function tambah_user(){
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Generate Password', 'required');
		$this->form_validation->set_rules('user', 'User or Admin', 'required');

		if($this->form_validation->run() == FALSE ){
			$this->load->view('admin/Generate_code');
		}
		else{
			$data_login = array(
				'nim' => $this->input->post('nim'),
				'password'	=> md5(str_replace(' ', '', $this->input->post('password'))),
				'akses'	=> $this->input->post('user')
				);
			$get_angkatan = substr ($data_login['nim'], 0, 2 );
			$angkatan = "20".$get_angkatan;
			$nama = $this->input->post('nama');
			//daftar login akun
			$result = $this->Madmin->tambah_user($data_login);
			if($result !=false){
				//set user detail data
				$data_akun = array(
					'nim'	=> $data_login['nim'],
					'nama'	=> $nama,
					'jurusan'	=> 'null',
					'angkatan'	=>$angkatan,
					'status'	=>'n'
					);
			$result_detail = $this->Madmin->detail_user($data_akun);
		}
	}

	public function add_user() {
		$this->template->load('admin/dashboard', 'admin/add_user');
	}

	public function list_user() {
		$this->template->load('admin/dashboard', 'admin/list_user');
	}

	public function signout() {
		$this->session->sess_destroy('username');
		$this->session->set_flashdata('sukses', 'Terimakasih telah menggunakan aplikasi ini');
		redirect('signin');
	}
}
