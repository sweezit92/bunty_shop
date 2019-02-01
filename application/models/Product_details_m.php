<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details_m extends CI_Model {

	public function fetch_pro_one_image($product_id){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('product.product_id',$product_id);
		$this->db->join('product_image','product.product_id = product_image.product_id');
		$this->db->join('category','category.category_id = product.cat_id');
		$this->db->group_by('product.product_id');
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_productzz($product_id){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('product.product_id',$product_id);
		$this->db->join('product_image','product.product_id = product_image.product_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_related_data($category_id){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('product.cat_id',$category_id);
		$this->db->join('product_image','product.product_id = product_image.product_id');
		$this->db->join('category','category.category_id = product.cat_id');
		$this->db->group_by('product.product_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_image_product($product_id){
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$product_id);
		$this->db->group_by('product_id');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Product_details_m.php */
/* Location: ./application/models/Product_details_m.php */