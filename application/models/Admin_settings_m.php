<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_settings_m extends CI_Model {

	public function fetch_details($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_query($records,$user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->update('user', $records);
		return true;
	}

}

/* End of file Admin_settings_m.php */
/* Location: ./application/models/Admin_settings_m.php */