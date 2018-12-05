<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_sub_category_m extends CI_Model {

	public function check_duplicate($cat_id,$sub_cat)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('category_id', $cat_id);
		$this->db->where('sub_category_name', $sub_cat);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_query($insert_array)
	{
		$this->db->insert('sub_category', $insert_array);
		return true;
	}

}

/* End of file Admin_add_sub_category_m.php */
/* Location: ./application/models/Admin_add_sub_category_m.php */