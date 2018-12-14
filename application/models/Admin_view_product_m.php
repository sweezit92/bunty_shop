<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_product_m extends CI_Model {

	public function get_products()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('category', 'category.category_id = product.cat_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_image($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id', $product_id);
		$this->db->limit(1);  
		$query = $this->db->get();
		return $query->row();
	}

	public function get_all_images($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_query($product_id,$get_images)
	{
		$this->db->where('product_id', $product_id);
		$this->db->delete('product');

		$this->db->where('product_id', $product_id);
		foreach($get_images as $fetch_images){
			unlink("uploads/".$fetch_images->image_name);
		}
		$this->db->delete('product_image');
		return true;
	}

}

/* End of file Admin_view_product_m.php */
/* Location: ./application/models/Admin_view_product_m.php */