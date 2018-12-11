<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_product extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_view_product_m');
		$data['get_products'] = $this->admin_view_product_m->get_products();
		$this->load->view('Admin_view_product', $data);
	}

}

/* End of file Admin_view_product.php */
/* Location: ./application/controllers/Admin_view_product.php */