<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_listing_m extends CI_Model {

	public function fetch_categories(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_products(){
		$this->db->select('*');
		$this->db->from('product');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Product_listing_m.php */
/* Location: ./application/models/Product_listing_m.php */