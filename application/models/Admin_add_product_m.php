<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_m extends CI_Model {

	public function check_duplicate($cat_id,$product_name)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('cat_id', $cat_id);
		$this->db->where('product_name', $product_name);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_query($insert_array)
	{
		$this->db->insert('product', $insert_array);
		$inserted_id = $this->db->insert_id();
		return  $inserted_id;
	}

	public function img_add($img_data)
	{
		$this->db->insert('product_image', $img_data);	
		return true;
	}

}

/* End of file Admin_add_product_m.php */
/* Location: ./application/models/Admin_add_product_m.php */