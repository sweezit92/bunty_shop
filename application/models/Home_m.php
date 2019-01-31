<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function fetch_categories(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_popular_products(){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('product_image','product.product_id = product_image.product_id');
		$this->db->join('category','product.cat_id = category.category_id');
		$this->db->group_by('product.cat_id');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */