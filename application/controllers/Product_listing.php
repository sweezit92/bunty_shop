<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_listing extends CI_Controller {

	public function index()
	{
		$this->load->view('product_listing');
	}

}

/* End of file Product_listing.php */
/* Location: ./application/controllers/Product_listing.php */