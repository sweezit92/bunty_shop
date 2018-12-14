<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function check_login($email,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */