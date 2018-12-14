<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_m extends CI_Model {

	public function check_duplicate($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->row();
	}

	public function insert_query($insert_array)
	{
		$this->db->insert('user', $insert_array);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}

}

/* End of file Register_m.php */
/* Location: ./application/models/Register_m.php */