<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_m extends CI_Model {

	public function get_details($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file Contact_m.php */
/* Location: ./application/models/Contact_m.php */