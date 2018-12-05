<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_category_m extends CI_Model {

	public function check_duplicate($cat_name)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_name', $cat_name);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_query($insert_array)
	{
		$this->db->insert('category', $insert_array);
		return true;
	}

}

/* End of file Admin_add_category_m.php */
/* Location: ./application/models/Admin_add_category_m.php */