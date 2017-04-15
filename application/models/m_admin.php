<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

	public function user($data) {
		$query = $this->db->get_where('akun', $data);
    return $query;
	}

	public function tambah_user($data_login){
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('nim', $data_login['nim']);
		$query = $this->db->get();
		if($query->num_rows() == 0){
			$this->db->insert('akun', $data_login);
			if($this->db->affected_rows()>0){
				return true;
			}
		}
		else{
				return false;
		}	
	}

	public function detail_user($data_akun){
		$this->db->insert('detail_user', $data_akun);
		if($this->db->affected_rows()=='1'){
			return true;
		}
		else{
			return false;
		}
	}


	public function 

}
