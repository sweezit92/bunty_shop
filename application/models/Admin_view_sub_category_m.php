<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_sub_category_m extends CI_Model {

	public function get_sub_cat()
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->join('category', 'category.category_id = sub_category.category_id');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Admin_view_sub_category_m.php */
/* Location: ./application/models/Admin_view_sub_category_m.php */