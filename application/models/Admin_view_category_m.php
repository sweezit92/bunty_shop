<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_category_m extends CI_Model {

	public function get_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_query($cat_id)
	{
		$this->db->where('category_id', $cat_id);
		$this->db->delete('category');
		return true;
	}

}

/* End of file Admin_view_category_m.php */
/* Location: ./application/models/Admin_view_category_m.php */