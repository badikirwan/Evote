<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

	public function user($data) {
		$query = $this->db->get_where('akun', $data);
    return $query;
	}

}
