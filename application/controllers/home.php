<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
