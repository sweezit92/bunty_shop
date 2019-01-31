<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_listing extends CI_Controller {

	public function index()
	{
		$this->load->model('product_listing_m');
		$data['fetch_all_categories'] = $this->product_listing_m->fetch_categories();
		$data['fetch_all_products'] = $this->product_listing_m->fetch_products();
		$this->load->view('product_listing',$data);
	}

}

/* End of file Product_listing.php */
/* Location: ./application/controllers/Product_listing.php */