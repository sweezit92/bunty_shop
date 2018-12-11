<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_category_m extends CI_Model {

	public function fetch_category($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_duplicate($cat_name,$cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_name', $cat_name);
		$this->db->where('category_id !=', $cat_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function update_query($update_array,$cat_id,$img_name)
	{
		$this->db->where('category_id', $cat_id);
		unlink("uploads/".$img_name);
		$this->db->update('category', $update_array);
		return true;
	}

}

/* End of file Admin_edit_category_m.php */
/* Location: ./application/models/Admin_edit_category_m.php */