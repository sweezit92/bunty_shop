<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_listing_m extends CI_Model {

	public function fetch_categories(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_category($cat_id){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_max_price($category_id){
		$this->db->select_max('product_price');
		$this->db->from('product');
		if($category_id != ""){
			$this->db->where('cat_id',$category_id);
		}
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	public function fetch_products($category_id,$price,$sorting_by){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('product_image','product_image.product_id = product.product_id');
		$this->db->join('category','category.category_id = product.cat_id');
		if($category_id != ""){
			$this->db->where('product.cat_id',$category_id);
		}
		if($sorting_by != ''){
			if($sorting_by == "Popular"){
				$this->db->order_by('product.product_date');
			}else if($sorting_by == "Price"){
				$this->db->order_by('product.product_price');
			}else if($sorting_by == "Relevant"){
				$this->db->order_by('product.product_date');
			}else if($sorting_by == "Latest"){
				$this->db->order_by('product.product_date');
			}
		}
		if($price != ''){
			$this->db->where('product.product_price <',$price);
		}
		$this->db->group_by('product_image.product_id');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}
}

/* End of file Product_listing_m.php */
/* Location: ./application/models/Product_listing_m.php */