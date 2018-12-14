<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_m extends CI_Model {

	public function fetch_product($product_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('category', 'category.category_id = product.cat_id');
		$this->db->where('product.product_id', $product_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_query($image_id,$image_name)
	{
		$this->db->where('image_id', $image_id);
		unlink("uploads/".$image_name);
		$this->db->delete('product_image');
		return true;
	}

	public function check_duplicate($cat_id,$product_name,$product_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('cat_id', $cat_id);
		$this->db->where('product_name', $product_name);
		$this->db->where('product_id !=', $product_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function update_query($update_array,$product_id)
	{
		$this->db->where('product_id', $product_id);
		$this->db->update('product', $update_array);
		return true;
	}

}

/* End of file Admin_edit_product_m.php */
/* Location: ./application/models/Admin_edit_product_m.php */