<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account_m extends CI_Model {

	public function fetch_details($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_duplicate($email,$user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$this->db->where('user_id !=', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_query($update_array,$user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->update('user', $update_array);
		return true;
	}

}

/* End of file My_account_m.php */
/* Location: ./application/models/My_account_m.php */